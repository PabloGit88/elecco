<?php

namespace Odiseo\Bundle\EleccoBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Odiseo\Bundle\EleccoBundle\Form\Type\UserType;
use Odiseo\Bundle\EleccoBundle\Entity\User;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;

class MainController extends Controller
{
    public function dashboardAction(Request $request)
    {
        return $this->render('OdiseoEleccoBundle:Backend/Main:dashboard.html.twig');
    }
    
}
