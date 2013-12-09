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

    /**
     * @var array List of all the form fields
     */
    protected $fields = array();

    /**
     * 
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container) {
        // set container
        $this->setContainer($container);
    }

    /**
     * Fire the extraction. Let's drill.
     * 
     * @param \Symfony\Component\Form\FormInterface $form
     * @return array
     */
    public function extractValidation(\Symfony\Component\Form\FormInterface $form) {
        $this->getFormValidationFields($form);

        return $this->fields;
    }

    /**
     * Drill all the forms
     * 
     * @param \Symfony\Component\Form\FormInterface $parentForm
     */
    protected function getFormValidationFields(\Symfony\Component\Form\FormInterface $parentForm) {
        foreach ($parentForm->all() as $form) {
            if ($form->count() == 0) {
                //let's check the field
                $this->fields[] = new ValidationField($this->container, $form);
            } else {
                //drill deeper
                $this->getFormValidationFields($form);
            }
        }
    }

}
