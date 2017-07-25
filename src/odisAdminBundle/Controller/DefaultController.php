<?php

namespace odisAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function dashboardAdminAction()
    {
        return $this->render('odisAdminBundle:Default:dashboardAdmin.html.twig');
    }
    
    public function formAdminAction()
    {
        return $this->render('odisAdminBundle:Default:formAdmin.html.twig');
    }
    
    public function addOutsourcingEmpAction()
    {
        return $this->render('odisAdminBundle:Default:addOutsourcingEmp.html.twig');
    }
    
}
