<?php

namespace Bundles\LotoBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * RoomRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RoomRepository extends EntityRepository
{
    public function getRooms(){
        return $this->createQueryBuilder('r')
                ->select('r.name')
                ->getQuery()
                ->getResult()
                ;
        
    }
}
