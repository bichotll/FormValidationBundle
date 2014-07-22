<?php

namespace Bic\FormValidationBundle\Generator;

/**
 * Extracts the validation of a form (Symfony\Component\Form\FormInstance)
 *
 * @author jaume.tarradasllort
 */
class FormValidation {

    /**
     * @var type \Symfony\Component\Validator\ValidatorInterface
     */
    private $validator;
    
    /**
     * @var array List of all the form fields
     */
    protected $fields = array();

    /**
     * 
     * @param \Symfony\Component\Validator\ValidatorInterface $validator
     */
    public function __construct(\Symfony\Component\Validator\ValidatorInterface $validator) {
        //set up validator
        $this->validator = $validator;
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
        //general form information
        $this->fields[] = new ValidationField($this->validator, $parentForm);
        
        foreach ($parentForm->all() as $form) {
            //let's check the field
            $this->fields[] = new ValidationField($this->validator, $form);
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
     * Returns the information in json.
     * 
     * @return type
     */
    public function toJson() {
        $jsonFields = array();
        foreach ($this->fields as $field) {
            $jsonFields[] = $field->toArray();
        }
        return json_encode($jsonFields);
    }

}
