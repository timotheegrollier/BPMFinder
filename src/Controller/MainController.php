<?php

namespace App\Controller;

use App\Entity\BPM;
use App\Form\BpmType;
use App\Repository\BPMRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(BPMRepository $BPMRepository): Response
    {
        $bpms = $BPMRepository->findAll();
        return $this->render('main/index.html.twig', ["bpms" => $bpms]);
    }
    #[Route('/add', name: 'app_create')]
    public function addBPM(Request $request): Response
    {
        $form = $this->createFormBuilder([], ['attr' => ['id' => 'current-BPM-form']])
            ->add("currentBPM", TextType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $currentBPM = intval($form['currentBPM']->getData());
            if ($currentBPM >= 60 && $currentBPM <= 220) {
                return $this->redirectToRoute('app_create_pitch', ['currentBPM' => $currentBPM]);
            }
        }

        return $this->render('main/create.html.twig', [
            "form" => $form->createView()
        ]);
    }
    #[Route('/add/pitch', name: 'app_create_pitch')]
    public function addPitch(Request $request, EntityManagerInterface $em, BPMRepository $BPMRepository): Response
    {
        $currentBPM = $request->query->get('currentBPM');
        if ($BPMRepository->findOneBy(["CurrentBPM" => $currentBPM])) {
            $this->addFlash("danger", "BPM déja en présent en base de donées !");
            return $this->redirectToRoute('app_create');
        }
        $BPM = new BPM();
        $form = $this->createForm(BpmType::class, $BPM);
        $form->handleRequest($request);
        $BPM->setCurrentBPM($currentBPM);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($BPM);
            $em->flush();
            return $this->redirectToRoute('app_home');
        }

        return $this->render('main/create.html.twig', [
            "form" => $form->createView()
        ]);
    }
}
