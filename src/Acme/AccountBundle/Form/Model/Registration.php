<?php

// src/Acme/AccountBundle/Form/Model/Registration.php
namespace Acme\AccountBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\Validator\Tests\Constraints as Assert;
use Acme\AccountBundle\Document\User;

class Registration
{
    /**
     * @Assert\Type(type="Acme\AccountBundle\Document\User")
     */
    protected $user;

    /**
     * @Assert\NotBlank()
   
     */
    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (boolean)$termsAccepted;
    }
}