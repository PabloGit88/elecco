<?php

namespace Odiseo\Bundle\EleccoBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Odiseo\Bundle\EleccoBundle\Entity\User;
use Odiseo\Bundle\EleccoBundle\Form\Type\UserType;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends Controller
{
    
    public function indexAction(Request $request)
    {    	
    	$user = new User();
    	
    	$form = $this->createForm(new UserType(), $user, array(
    		'action' => $this->generateUrl('odiseo_elecco_frontend_home'))
    	);
/*
    	if($request->isMethod('POST'))
    	{
    		$form->handleRequest($request);
    		 
    		if ($form->isValid())
    		{
    			$orderForm = $form->getData();
    			$emailForm = $orderForm->getClient()->getEmail();
    			$fullnameForm = $orderForm->getClient()->getFullname();
    			$phoneForm = $orderForm->getClient()->getPhone();
    	
    			$repository = $this->get('odiseo_pickmystuff.repository.client');
    			$clientData = $repository->findOneBy(array('email'  => $emailForm));
    			if($clientData != null)
    			{
    				$clientData->setFullname($fullnameForm);
    				$clientData->setPhone($phoneForm);
    					
    				$orderForm->setClient($clientData);
    			}
    	
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($orderForm);
    			$em->flush();
    	
    			//send mail
    			$this->sendMail($orderForm);
    	
    			$vars = array();
    			$noticeMessage = 'Pedido enviado correctamente!';
    	
    			if($form->get('Add')->isClicked())
    			{
    				$vars['id'] = $orderForm->getId();
    				$noticeMessage .= ' Puede agregar otro a continuación';
    			}
    	
    			$this->get('session')->getFlashBag()->add('notice', $noticeMessage);
    	
    			return $this->redirect($this->generateUrl('odiseo_pick_my_stuff_frontend_order', $vars));
    		}
    	}*/
   		return $this->render('OdiseoEleccoBundle:Frontend/Home:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
