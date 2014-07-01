<?php

namespace Bic\FormValidationBundle\Tests\Generator;

use Bic\FormValidationBundle\Tests\Form;
use Bic\FormValidationBundle\Generator\FormValidation;
use Symfony\Component\Validator\Validation;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

require_once __DIR__ . '/../../../../../../../app/AppKernel.php';

class FormValidationTest extends WebTestCase {

    private $container;

    public function setUp() {
        $this->app = new \AppKernel('test', true);
        $this->app->boot();
        $this->container = $this->app->getContainer();
        $this->validator = $this->container->get('validator');
    }

    public function testSimpleForm() {
        $fVal = new FormValidation($this->validator);

        $form = $this->container->get('form.factory')->create(new Form\SimpleType(), null);

        $constraints = $fVal->extractValidation($form);

        $jsonConstraints = $fVal->toJson();
    }

    public function testFormTypes() {
        $fVal = new FormValidation($this->validator);

        $form = $this->container->get('form.factory')->create(new Form\FormTypesType(), null, array(
            'action' => 'wharever',
            'method' => 'POST',
            'data' => array('foo' => 'bar')
        ));

        $constraints = $fVal->extractValidation($form);

        $jsonConstraints = $fVal->toJson();
    }

    public function testModelBasedType() {
        $fVal = new FormValidation($this->validator);

        $form = $this->container->get('form.factory')->create(new Form\ModelBasedType(), null);

        $constraints = $fVal->extractValidation($form);

        $jsonConstraints = $fVal->toJson();
    }

    public function testInnerFormType() {
        $fVal = new FormValidation($this->validator);

        $form = $this->container->get('form.factory')->create(new Form\InnerFormType(), null);

        $constraints = $fVal->extractValidation($form);

        $jsonConstraints = $fVal->toJson();
    }

}
