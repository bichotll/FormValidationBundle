<?php

namespace Bic\FormValidationBundle\Tests\Generator;

use Bic\FormValidationBundle\Tests\Form;
use Bic\FormValidationBundle\Generator\FormValidation;
use Symfony\Component\Validator\Validation;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

require_once __DIR__.'/../../../../../../../app/AppKernel.php';

class FormValidationTest extends WebTestCase {

    private $container;

    public function setUp() {
        $this->app = new \AppKernel('test', true);
        $this->app->boot();
        $this->container = $this->app->getContainer();
    }

    public function testSimpleForm() {
        $this->validator = $this->container->get('validator');
        $fVal = new FormValidation($this->validator);
        
        $form = $this->container->get('form.factory')->create(new Form\SimpleType(), null);

        $constraints = $fVal->extractValidation($form);
    }

    public function testFormTypes() {
        $this->validator = $this->container->get('validator');
        $fVal = new FormValidation($this->validator);
        $form = new Form\FormTypesType();
        $form = $this->container->get('form.factory')->create(new Form\SimpleType(), null, array(
            'action' => 'category_create',
            'method' => 'POST',
        ));
    }

}
