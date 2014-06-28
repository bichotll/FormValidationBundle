<?php

namespace Bic\FormValidationBundle\Tests\Generator;

use Bic\FormValidationBundle\Tests\Form;
use Bic\FormValidationBundle\Generator\FormValidation;

class FormValidationTest extends \PHPUnit_Framework_TestCase {

    public function testSimpleForm() {
        $fVal = new FormValidation($container);
        $form = new Form\SimpleType();
    }

}
