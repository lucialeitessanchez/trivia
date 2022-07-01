<?php
namespace App\Repository;

use App\Entity\Pregunta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PreguntaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pregunta::class);
    }

    /**
     * @return Pregunta[]
     */
    public function findAllParameter(string $parametro): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p
            FROM '.Pregunta::class.' p
            WHERE p.parametromedicion = :parametro'
        )->setParameter('parametro', $parametro);

        // returns an array of Product objects
        return $query->getResult();
    }

}
