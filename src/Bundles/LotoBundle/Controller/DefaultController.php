<?php

namespace Bundles\LotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BundlesLotoBundle:Default:index.html.twig');
    }
}
