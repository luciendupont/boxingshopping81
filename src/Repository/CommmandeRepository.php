<?php

namespace App\Repository;

use App\Entity\Commmande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Commmande>
 *
 * @method Commmande|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commmande|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commmande[]    findAll()
 * @method Commmande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommmandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commmande::class);
    }

//    /**
//     * @return Commmande[] Returns an array of Commmande objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Commmande
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
