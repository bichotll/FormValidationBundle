<?php

namespace Bic\FormValidationBundle\Generator;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Extracts the validation of a form (Symfony\Component\Form\Form)
 *
 * @author jaume.tarradasllort
 */
class FormValidation extends ContainerAware {

    protected $fields = array();

    public function __construct(ContainerInterface $container) {
        // set container
        $this->setContainer($container);
    }

    public function extractValidation(\Symfony\Component\Form\FormInterface $form) {
        $this->getFormValidationFields($form);

        return $this->fields;
    }

    protected function getFormValidationFields(\Symfony\Component\Form\FormInterface $parentForm) {
        foreach ($parentForm->all() as $form) {
            if ($form->count() == 0) {
                $this->fields[] = new ValidationField($this->container, $form);
            } else {
                $this->getFormValidationFields($form);
            }
        }
    }

}
