<?php

namespace Site\LotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    public function roomListAction()
    {
        return $this->render('SiteLotoBundle:Default:index.html.twig');
    }
    
    public function createRoomAction()
    {
        return $this->render('SiteLotoBundle:Default:index.html.twig');
    }
    
    public function roomWaitingAction()
    {
        return $this->render('SiteLotoBundle:Default:index.html.twig');
    }
    
    public function roomAction()
    {
        return $this->render('SiteLotoBundle:Default:index.html.twig');
    }
    
    public function resultAction()
    {
        return $this->render('SiteLotoBundle:Default:index.html.twig');
    }
}
