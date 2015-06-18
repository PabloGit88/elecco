<?php

namespace Odiseo\Bundle\EleccoBundle\Entity;

use DateTime;
use Odiseo\Bundle\ProjectBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 */
class User extends BaseUser
{
	protected $name;
	protected $lastname;
	protected $phone;
	protected $participations;
	
    public function __construct()
    {
    	parent::__construct();
    }
    
    public function setName($name)
    {
    	$this->name = $name;
    }
    
    public function getName()
    {
    	return $this->name;
    }
    
    public function setLastName($lastname)
    {
    	$this->lastname = $lastname;
    }
    
    public function getLastName()
    {
    	return $this->lastname;
    }
    
    public function setPhone($phone)
    {
    	$this->phone = $phone;
    }
    
    public function getPhone()
    {
    	return $this->phone;
    }
}