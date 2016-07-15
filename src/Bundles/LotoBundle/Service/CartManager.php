<?php

namespace Bundles\LotoBundle\Service;

use Symfony\Component\DependencyInjection\Container;

class NumberGenerator 
{
    private $container;

    public function __construct(Container $container) 
    {
        $this->container = $container;
    }
    
    public function generate()
    {
        $repo = $this->container->get('bundles_loto.room_repository');
//        var_dump($repo->getRooms());
//        die();
        $rooms = $repo->findAll();
        foreach ($rooms as $room) {
            $this->generateNumber($room);
        }
        
        return $rooms;
    }
    
    private function generateNumber($room)
    {
        $numbers = $room->getNumbers();
        $numbers[] = $this->recursive($numbers);
        
        $room->setNumbers($numbers);
        $em = $this->container->get('doctrine.orm.entity_manager')->flush();
    }
    
    private function recursive($numbers)
    {
        $num = rand(1, 90);
        if (!in_array($num, $numbers)) {
            return $num;
        }
        
        return $this->recursive($numbers);
    }
}
