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

    	if($request->isMethod('POST'))
    	{
    		$form->handleRequest($request);
    		 
    		if ($form->isValid())
    		{
    			$userForm = $form->getData();
    			
    	
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($userForm);
    			$em->flush();
    	
    			//send mail
    			//$this->sendMail($orderForm);
    	
    			$noticeMessage = 'Suscribe successfull!';
    	
    			/*if($form->get('Add')->isClicked())
    			{
    				$noticeMessage .= ' Puede agregar otro a continuación';
    			}*/
    	
    			$this->get('session')->getFlashBag()->add('notice', $noticeMessage);
    	
    			return $this->redirect($this->generateUrl('odiseo_elecco_frontend_home'));
    		}
    	}
   		return $this->render('OdiseoEleccoBundle:Frontend/Home:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
