<?php

namespace Odiseo\Bundle\EleccoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OdiseoEleccoBundle:Default:index.html.twig', array('name' => $name));
    }
}
