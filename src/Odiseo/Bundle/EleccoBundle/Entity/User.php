<?php

namespace Odiseo\Bundle\EleccoBundle\Entity;

use DateTime;
use Odiseo\Bundle\ProjectBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * User
 */
class User extends BaseUser
{
	protected $passport;
	protected $birthdate;
	protected $country;
	protected $videoName;
 	protected $videoFile;
	protected $isPaid;
	
    public function __construct()
    {
    	parent::__construct();
    }
    public function setEmail($email){
    	$this->email = $email;
    	$this->username = $email;
    	$this->password = $email;
    }
    
    public function setBirthdate($birthdate)
    {
    	$this->birthdate = $birthdate;
    }
    
    public function getBirthdate()
    {
    	return $this->birthdate;
    }
    
    public function setCountry($country)
    {
    	$this->country = $country;
    }
    
    public function getCountry()
    {
    	return $this->country;
    }
    
    public function setPassport($passport)
    {
    	$this->passport = $passport;
    }
    
    public function getPassport()
    {
    	return $this->passport;
    }
    
    public function setVideoName($videoName)
    {
    	$this->videoName = $videoName;
    }
    
    public function getVideoName()
    {
    	return $this->videoName;
    }
    /* vichuploader*/
    public function setVideoFile(File $video = null)
    {
    	$this->videoFile = $video;
    
    	if ($video) {
    		// It is required that at least one field changes if you are using doctrine
    		// otherwise the event listeners won't be called and the file is lost
    		$this->updatedAt = new \DateTime('now');
    	}
    }
    
    /**
     * @return File
     */
    public function getVideoFile()
    {
    	return $this->videoFile;
    }
    public function setIsPaid($isPaid)
    {
    	$this->isPaid = $isPaid;
    }
    
    public function getIsPaid()
    {
    	return $this->isPaid;
    }
}