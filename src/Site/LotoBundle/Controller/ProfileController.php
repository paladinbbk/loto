<?php

namespace Site\LotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteLotoBundle:Profile:index.html.twig');
    }
    
    public function resultAction()
    {
        return $this->render('SiteLotoBundle:Profile:index.html.twig');
    }
    
    public function friendsAction()
    {
        return $this->render('SiteLotoBundle:Profile:index.html.twig');
    }
    
    public function refillAction()
    {
        return $this->render('SiteLotoBundle:Profile:index.html.twig');
    }
    
    public function editAction()
    {
        return $this->render('SiteLotoBundle:Profile:edit.html.twig');
    }
}
