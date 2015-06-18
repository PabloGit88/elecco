<?php
namespace Odiseo\Bundle\EleccoBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class UserType extends AbstractType
{	
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
        $builder
        ->add('name', 'text', array(
        		'required' => true,
        		'label'    => 'Nombre'
        ))
        ->add('lastname', 'text', array(
        		'required' => true,
        		'label'    => 'Apellido'
        ))
        ->add('phone', 'text', array(
        		'required' => true,
        		'label'    => 'Telefono'
        ))
        ->add('dni', 'text', array(
        		'required' => true,
        		'label'    => 'Dni'
        ))
        ->add('email', 'email', array(
        		'required' => true,
        		'label'    => 'Email'
        ))
       	->add('Cargar', 'submit')
		;
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => 'Odiseo\Bundle\EleccoBundle\Entity\User',
      			'cascade_validation' => true,
		));
	}
	public function getName()
	{
		return 'odiseo_brancarally_user';
	}
}