<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function defaultAction(Request $request): Response
    {
        return $this->render('default/default.html.twig');
    }

    public function pimcoreAction(Request $request): Response
    {
        return $this->render('default/layout.html.twig');
    }

    public function productAction(Request $request): Response
    {
        return $this->render('default/productLayout.html.twig');
    } 
    public function servicesAction(Request $request): Response
    {
        return $this->render('default/servicesLayout.html.twig');
    }
    public function CustomSoftwareDevelopmentAction(Request $request): Response
    {
        return $this->render('default/CustomSoftwareDevelopment.html.twig');
    }
    public function ManagedServicesAction(Request $request): Response
    {
        return $this->render('default/ManagedServices.html.twig');
    }
    public function eCommerceAction(Request $request): Response
    {
        return $this->render('default/eCommerce.html.twig');
    }   
    public function ResearchDevelopmentAction(Request $request): Response
    {
        return $this->render('default/ResearchDevelopment.html.twig');
    }
    public function AIMLAction(Request $request): Response
    {
        return $this->render('default/AIML.html.twig');
    }
}
