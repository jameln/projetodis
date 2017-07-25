<?php

namespace odisVendorBundle\Controller;
use odisVendorBundle\Entity\vendor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('odisVendorBundle:Default:index.html.twig');
    }

    public function formVendorAction()
    {
        return $this->render('odisVendorBundle:Default:formVendor.html.twig');
    }
    
    /**
     * @Route("/vendorAdd", name="add new Vendor")
     */
    public function vendorAddAction(Request $request)
    {
        $vendor = new vendor();
        $vendor->setLegalName($request->request->get('vendor_legal_name'));
        $vendor->setTradeName($request->request->get('vendor_trade_name'));
        $vendor->setHeadQuarter($request->request->get('vendor_head_quarter'));
        $vendor->setNumEmployee($request->request->get('vendor_number_of_employee'));
        $vendor->setWebsite($request->request->get('vendor_website'));
        $vendor->setAltMail($request->request->get('vendor_alternative_contact_email'));
        $vendor->setAltName($request->request->get('vendor_alternative_contact_name_position'));
        $vendor->setAltTelephone($request->request->get('vendor_alternative_contact_telephone'));
        $vendor->setCaMail($request->request->get('vendor_email'));
        $vendor->setCaName($request->request->get('vendor_name_surname'));
        $vendor->setCaPosition($request->request->get('vendor_position'));
        $vendor->setCaTelephone($request->request->get('vendor_telephone'));
        $vendor->setLogin($request->request->get('vendor_Login'));
        $vendor->setPassword($request->request->get('vendor_access_key'));
        $vendor->setReguComplience($request->request->get('vendor_regulatory_compliance'));
        $vendor->setRpcRegulation($request->request->get('vendor_prc_regulations'));

        // On l'enregistre notre objet $advert dans la base de donn�es, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($vendor);
        $em->flush();
        
        return $this->render('odisVendorBundle:Default:dashboardVendor.html.twig');
    }

    /**
     * @Route("/vendorEdit/{id}", name="edit Vendor")
     */
    public function vendorEditAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $vendor = $em->getRepository('odisVendorBundle:vendor')->find($id);

        var_dump($vendor);
        die();

        return $this->render('odisVendorBundle:Default:dashboardVendor.html.twig');
    }
    
    public function dashboardVendorAction()
    {
        return $this->render('odisVendorBundle:Default:dashboardVendor.html.twig');
    }
}
