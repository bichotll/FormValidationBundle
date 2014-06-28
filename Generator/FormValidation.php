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
     * @return \Bic\FormValidationBundle\Generator\FormValidation
     */
    public function extractValidation(\Symfony\Component\Form\FormInterface $form) {
        $this->getFormValidationFields($form);

        return $this;
    }

    /**
     * Drill all the forms
     * 
     * @param \Symfony\Component\Form\FormInterface $parentForm
     */
    protected function getFormValidationFields(\Symfony\Component\Form\FormInterface $parentForm) {
        foreach ($parentForm->all() as $form) {
            //let's check the field
            $this->fields[] = new ValidationField($this->container, $form);
            if ($form->count() != 0) {
                //drill deeper
                $this->getFormValidationFields($form);
            }
        }
    }

    /**
     * Get all the fields array
     * 
     * @return array
     */
    public function getFields() {
        return $this->fields;
    }

    /**
     * Returns the information in json. Requires jms serializer bundle
     * 
     * @return type
     */
    public function toJson() {
        $jsonFields = array();
        foreach ($this->fields as $field){
            $jsonFields[] = $field->toArray();
        }
        return json_encode($jsonFields);
    }

}
