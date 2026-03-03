<?php

namespace App\Repository;

use App\Entity\Property;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Property>
 *
 * Repository pour gérer les propriétés immobilières.
 */
class PropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Property::class);
    }

    // ======================
    // Méthodes personnalisées
    // ======================
    
    /**
     * Exemple : trouver les propriétés disponibles par ville.
     *
     * @param string $city
     * @return Property[]
     */
    public function findByCity(string $city): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.city = :city')
            ->setParameter('city', $city)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Exemple : trouver une propriété par son nom exact.
     *
     * @param string $name
     * @return Property|null
     */
    public function findOneByName(string $name): ?Property
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
