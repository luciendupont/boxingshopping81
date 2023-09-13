<?php

namespace App\Repository;

use App\Entity\Fourni;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fourni>
 *
 * @method Fourni|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fourni|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fourni[]    findAll()
 * @method Fourni[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FourniRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fourni::class);
    }

//    /**
//     * @return Fourni[] Returns an array of Fourni objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Fourni
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
