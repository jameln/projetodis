<?php

namespace odisOutsourcingEmpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function profilOutsourcingEmpAction()
    {
        return $this->render('odisOutsourcingEmpBundle:Default:profilOutsourcingEmp.html.twig');
    }
}
