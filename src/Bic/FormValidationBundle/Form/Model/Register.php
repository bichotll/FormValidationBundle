<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Bic\FormValidationBundle\Form\Model;

// import annotation support
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Register model to test
 *
 * @author jaume.tarradasllort
 */
class Register
{
    /**
     * @Assert\NotBlank(groups={"all", "registration", "update", "login", "forgot_password"})
     * @Assert\Length(min=9, max=20, groups={"all", "login", "forgot_password"})
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/",
     *     match=true,
     *     message="Phone number has to be a digit.",
     *     groups={"all", "registration", "login", "forgot_password"}
     * )
     */
    private $phone;
    
    /**
     * @Assert\NotBlank(groups={"all","login", "registration", "update", "security"})
     * @Assert\Length(min=8, max=22, groups={"all","registration", "login", "update"})
     * @Assert\Regex(
     *     pattern="/^.*(?=.{8})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).*$/",
     *     match=true,
     *     message="Doesn't match required format.",
     *     groups={"all", "registration", "update", "login", "security"}
     * )
     */
    private $password;
    
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
