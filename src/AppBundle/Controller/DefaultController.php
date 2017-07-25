<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/", name="selectTypeOutsourcing")
     */
    public function selecttypeoutsourcingAction()
    {
        return $this->render('default/selectTypeOutsourcing.html.twig');
    }
}
