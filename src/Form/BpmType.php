<?php

namespace App\Form;

use App\Entity\BPM;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BpmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('M20')
            ->add('M19')
            ->add('M18')
            ->add('M17')
            ->add('M16')
            ->add('M15')
            ->add('M14')
            ->add('M13')
            ->add('M12')
            ->add('M11')
            ->add('M10')
            ->add('M9')
            ->add('M8')
            ->add('M7')
            ->add('M6')
            ->add('M5')
            ->add('M4')
            ->add('M3')
            ->add('M2')
            ->add('M1')
            ->add('P1')
            ->add('P2')
            ->add('P3')
            ->add('P4')
            ->add('P5')
            ->add('P6')
            ->add('P7')
            ->add('P8')
            ->add('P9')
            ->add('P10')
            ->add('P11')
            ->add('P12')
            ->add('P13')
            ->add('P14')
            ->add('P15')
            ->add('P16')
            ->add('P17')
            ->add('P18')
            ->add('P19')
            ->add('P20')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BPM::class,
        ]);
    }
}
