<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ApplicationsRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class ApplicationsRepository extends EntityRepository
{
    public function getLastOfAgency(Companies $company)
    {
        return $this->createQueryBuilder('a')
            ->select('a')
            ->where('a.company = :company')
            ->setParameter('company', $company->getId())
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleResult()
        ;
    }
}
