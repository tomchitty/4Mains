<?php

namespace AQM\ArtBundle\Repository;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends \Doctrine\ORM\EntityRepository
{
    public function getOrdreMax()
    {
        $queryBuilder = $this->createQueryBuilder('c');
        $queryBuilder->select('MAX(c.ordre)');

        return $queryBuilder->getQuery()->getSingleResult()[1];
    }

    public function getCategoriesByOrdre()
    {
        $queryBuilder = $this->createQueryBuilder('c');
        $queryBuilder
            ->addOrderBy('c.ordre')
            ->addOrderBy('c.libelle');
        return $queryBuilder->getQuery()->getResult();
    }
}
