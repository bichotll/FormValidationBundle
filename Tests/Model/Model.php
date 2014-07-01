<?php

namespace Bic\FormValidationBundle\Tests\Model;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

class Model {

    public static function loadValidatorMetadata(ClassMetadata $metadata) {
        $metadata->addPropertyConstraint('notBlank', new Assert\NotBlank(array(
            'groups' => array('group1'),
        )));
        $metadata->addPropertyConstraint('notNull', new Assert\NotNull());
        $metadata->addPropertyConstraint('true', new Assert\True());
        $metadata->addPropertyConstraint('type', new Assert\Type(array(
            'type' => 'integer',
            'message' => 'The value {{ value }} is not a valid {{ type }}.',
            'groups' => array('group1'),
        )));
        $metadata->addPropertyConstraint('email', new Assert\Email());
        $metadata->addPropertyConstraint('length', new Assert\Length(
                array(
            'min' => 2,
            'max' => 50,
            'groups' => array('group2'),
                )
        ));
        $metadata->addPropertyConstraint('url', new Assert\Url());
        $metadata->addPropertyConstraint('regex', new Assert\Regex(array(
            'pattern' => '/^\w+/',
        )));
        $metadata->addPropertyConstraint('ip', new Assert\Ip());
        $metadata->addPropertyConstraint('range', new Assert\Range(array(
            'min' => 120,
            'max' => 180
        )));
        $metadata->addPropertyConstraint('equalTo', new Assert\EqualTo(array(
            'value' => 20
        )));
        $metadata->addPropertyConstraint('date', new Assert\Date());
        $metadata->addPropertyConstraint('choice', new Assert\Choice(array(
            'choices' => array('male', 'female'),
            'message' => 'Choose a valid gender.',
        )));
        $metadata->addPropertyConstraint('file', new Assert\File(array(
            'maxSize' => '1024k',
            'mimeTypes' => array(
                'application/pdf',
                'application/x-pdf',
            ),
            'mimeTypesMessage' => 'Please upload a valid PDF',
        )));
        $metadata->addPropertyConstraint('currency', new Assert\Currency());
    }

    private $notBlank;
    private $notNull;
    private $true;
    private $type;
    private $email;
    private $length;
    private $url;
    private $regex;
    private $ip;
    private $range;
    private $equalTo;
    private $date;
    private $choice;
    private $file;
    private $currency;

}
