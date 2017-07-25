<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/test", name="testpage")
     */
    public function listAction() {
        $Todos = $this->getDoctrine()
        ->getRepository('AppBundle:Todo')
        ->findAll();
        return $this->render('test/index.html.twig', array(
            'Todos' => $Todos
            ));
    }

    
    /**
     * @Route("/test/create", name="test_create")
     */
    public function createAction(Request $request) {
        return $this->render('test/create.html.twig');
    }

    /**
     * @Route("/test/edit/{id}", name="test_edit")
     */
    public function editAction($id, Request $request) {
        return $this->render('test/edit.html.twig');
    }

    /**
     * @Route("/test/details/{id}", name="test_details")
     */
    public function detailsAction($id) {
        return $this->render('test/details.html.twig');
    }

}
