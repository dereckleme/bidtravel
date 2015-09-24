<?php

namespace Base\Repository;

use Doctrine\ORM\EntityRepository;

class PassagemRepository extends EntityRepository
{
    public function findLeiloes(){
        $qb =  $this->createQueryBuilder('p');
        $qb->select('p');
        $qb->innerJoin('Base\Entity\Leilao', 'l', 'WITH', 'p.leilao = l.idleilao');
        $qb->where("l.datainicio <= :now");
        $qb->setParameter('now', new \DateTime('now'));
        $query = $qb->getQuery();
        $results = $query->getResult();
        return $results;
    }
}