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
        ->add('fullname', 'text', array(
        		'required' => true,
        		'label'    => 'Nombre',
		        'attr' => array(
		             'placeholder' => 'Nombre',
		        ),
        ))
        ->add('passport', 'text', array(
        		'required' => true,
        		'label'    => 'Passport #',
		        'attr' => array(
		             'placeholder' => 'Passport #',
		        ),
        ))
        ->add('birthdate', 'date', array(
        		'required' => true,
        		'label'    => 'Birthdate',
		        'attr' => array(
		             'placeholder' => 'Birthdate',
		        ),
        ))
        ->add('email', 'email', array(
        		'required' => true,
        		'label'    => 'Email',
		        'attr' => array(
		             'placeholder' => 'Email',
		        ),
        ))
        ->add('country', 'choice', array('choices' => array(
				'Puerto Rico' => 'Puerto Rico',
				),
  				'empty_data'  => null,
        		'required' => true,
        		'empty_value' => '    ',
        		'label'    => 'Country',
		        'attr' => array(
		             'placeholder' => 'Country',
		        ),
        ))
        ->add('videoFile', 'file', array(
        		'required' => true,
        		'label'    => 'Update Your Video'
        ))
   		->add('Pay', 'submit')
       	->add('Submit', 'submit')
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
		return 'odiseo_elecco_user';
	}
}