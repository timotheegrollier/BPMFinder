<?php

namespace App\Repository;

use App\Entity\BPM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BPM|null find($id, $lockMode = null, $lockVersion = null)
 * @method BPM|null findOneBy(array $criteria, array $orderBy = null)
 * @method BPM[]    findAll()
 * @method BPM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BPMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BPM::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(BPM $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(BPM $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return BPM[] Returns an array of BPM objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BPM
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function findAllCurrentBPM(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT b.CurrentBPM
            FROM App\Entity\BPM b'
        );

        // returns an array of Product objects
        return $query->getResult();
    }
}
