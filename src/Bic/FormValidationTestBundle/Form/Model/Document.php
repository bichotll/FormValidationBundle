<?php

namespace Bic\FormValidationTestBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Document
{

    /**
     * @Assert\NotBlank(groups={"all"})
     */
    protected $type;

    /**
     * @Assert\NotBlank(groups={"orangeAll", "orangeRegistration"})
     * @Assert\Length(min=9, max=9, groups={"orangeAll", "orangeRegistration"})
     * @Assert\Regex(
     *     pattern="/^[0-9]{8}[a-zA-Z]{1}|^[X|Y|Z]{1}[0-9]{7}[a-zA-Z]{1}$|^[a-zA-Z]{3}[0-9]{6}$/",
     *     match=true,
     *     message="Formato incorrecto",
     *     groups={"orangeAll", "orangeRegistration"}
     * )
     */
    protected $value;

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

}