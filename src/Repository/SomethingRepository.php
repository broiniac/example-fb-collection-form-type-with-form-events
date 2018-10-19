<?php

namespace App\Repository;

use App\Entity\Something;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Something|null find($id, $lockMode = null, $lockVersion = null)
 * @method Something|null findOneBy(array $criteria, array $orderBy = null)
 * @method Something[]    findAll()
 * @method Something[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SomethingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Something::class);
    }

//    /**
//     * @return Something[] Returns an array of Something objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Something
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
