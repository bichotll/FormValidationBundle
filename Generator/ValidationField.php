<?php

namespace Bic\FormValidationBundle\Generator;

class ValidationField {

    /**
     * @var type \Symfony\Component\Validator\ValidatorInterface
     */
    private $validator;

    /**
     * @var type \Symfony\Component\Form\Form
     */
    public $form;

    /**
     * @var array Full name of the field
     */
    private $pathName = array();

    /**
     * @var string Full path name
     */
    private $fullPathName;

    /**
     * @var array Validation groups
     */
    private $validationGroups = array();

    /**
     * @var class Property parent class
     */
    private $dataClass;

    /**
     * @var class Property parent class
     */
    private $value;

    /**
     * @var array Validation constraints
     */
    private $constraints = array();

    /**
     * @var string Field type
     */
    private $type;

    /**
     * @var array Field options
     */
    private $options;

    /**
     * @var array Entity choice options
     */
    private $dataEntityChoice = array();

    /**
     * 
     * @param \Symfony\Component\Validator\ValidatorInterface $validator
     * @param \Symfony\Component\Form\FormInterface $form
     */
    public function __construct(\Symfony\Component\Validator\ValidatorInterface $validator, \Symfony\Component\Form\FormInterface $form) {
        //set up validator
        $this->validator = $validator;

        $this->form = $form;

        //get pathName
        $this->pathName[] = $form->getConfig()->getName();
        $this->getParentPathNames($form);

        $this->getFullPathName();

        $this->getParentValidationGroups($form);

        $this->getParentDataClasses($form);

        $this->extractType($form);

        $this->extractConfig($form);

        $this->extractValue();

        if ($this->dataClass != NULL) {
            $this->extractContraints($form);
        }
    }

    /**
     * 
     * @param \Symfony\Component\Form\FormInterface $form
     */
    private function getParentPathNames(\Symfony\Component\Form\FormInterface $form) {
        $parent = $form->getParent();
        if ($parent) {
            $this->pathName[] = $parent->getConfig()->getName();
            $this->getParentPathNames($parent);
        }
    }

    /**
     * Generates full path name from the $this->pathName
     */
    private function getFullPathName() {
        $tempPath = array_reverse($this->pathName);
        $this->fullPathName = $tempPath[0] . '[';
        for ($i = 1; $i < count($tempPath); $i++) {
            $this->fullPathName .= $tempPath[$i];
            if ($i != count($tempPath) - 1) {
                $this->fullPathName .= '][';
            } else {
                $this->fullPathName .= ']';
            }
        }
    }

    /**
     * 
     * @param \Symfony\Component\Form\FormInterface $form
     */
    private function getParentValidationGroups(\Symfony\Component\Form\FormInterface $form) {
        $parent = $form->getParent();

        //Check if is a form
        if ($parent == NULL || !$parent instanceof \Symfony\Component\Form\FormInterface) {
            return;
        }

        $validationGroups = $parent->getConfig()->getOption('validation_groups');
        if ($parent && !empty($validationGroups)) {
            $this->validationGroups[] = $parent->getConfig()->getOption('validation_groups');
        }
    }

    /**
     * 
     * @param \Symfony\Component\Form\FormInterface $form
     */
    private function getParentDataClasses(\Symfony\Component\Form\FormInterface $form) {
        $parent = $form->getParent();

        //check if the object has getConfig method
        if ($parent == NULL || !$parent instanceof \Symfony\Component\Form\FormInterface || !in_array('getConfig', get_class_methods($parent))) {
            return;
        }

        //just in case
        try {
            if ($parent->getConfig()->getDataClass()) {
                $this->dataClass = $parent->getConfig()->getDataClass();
            } else {
                $this->getParentDataClasses($parent);
            }
        } catch (Exception $e) {
            return;
        }
    }

    /**
     * Helper - Extract all the constraints
     */
    private function extractContraints() {
        try {
            // get meta data from entity
            $metadata = $this->validator->getMetadataFor($this->dataClass);
        } catch (Exception $ex) {
            return;
        } catch (\Symfony\Component\Validator\Exception\NoSuchMetadataException $e) {
            return;
        }

        // loop through members
        foreach ($metadata->members AS $property => $inner) {
            if ($property == $this->pathName[0]) {
                // init property name index
                $this->constraints = array();

                foreach ($inner AS $definition) {
                    // if group
                    if (empty($this->validationGroups)) {
                        foreach ($definition->constraints AS $ungroupedConstraints) {
                            // add constraint object
                            $this->constraints['Default'][] = $this->formatConstraint($ungroupedConstraints);
                        }
                    } else {
                        foreach ($definition->constraintsByGroup AS $constraintGroup => $constraints) {
                            if (in_array($constraintGroup, $this->validationGroups)) {
                                foreach ($constraints AS $constraint) {
                                    // add constraint object
                                    $this->constraints[$constraintGroup][] = $this->formatConstraint($constraint);
                                }
                            } else {
                                foreach ($this->validationGroups as $validationGroup) {
                                    if (in_array($constraintGroup, $validationGroup)) {
                                        foreach ($constraints AS $constraint) {
                                            // add constraint object
                                            $this->constraints[$constraintGroup][] = $this->formatConstraint($constraint);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    /**
     * 
     * @param type $constraint
     */
    private function formatConstraint($constraint) {
        $toInsert = (array) $constraint;
        $toInsert['class'] = get_class($constraint);
        return $toInsert;
    }

    /**
     * Extracts the form type
     * 
     * @param \Symfony\Component\Form\FormInterface $form
     */
    private function extractType() {
        $this->type = $this->form->getConfig()->getType()->getName();

        if ($this->type === 'entity') {
            $this->extractEntityChoice();
        }
    }

    /**
     * Extracts the choice list from the formView object
     * 
     */
    private function extractEntityChoice() {
        $formView = $this->form->createView();
        $choiceViews = $formView->vars['choices'];

        foreach ($choiceViews as $choice) {
            $arrayChoice = array();
            $arrayChoice['id'] = $choice->value;
            $arrayChoice['value'] = $choice->label;
            array_push($this->dataEntityChoice, $arrayChoice);
        }
    }

    /**
     * Extracts the form passed options
     */
    private function extractConfig() {
        $options = $this->form->getConfig()->getAttributes();
        $this->options = $options['data_collector/passed_options'];
    }

    /**
     * Extracts the form data (field value)
     */
    private function extractValue() {
        $this->value = $this->form->getData();
    }

    public function toArray() {
        $arrayObject = array();

        $arrayObject['constraints'] = $this->constraints;
        $arrayObject['dataClass'] = $this->dataClass;
        $arrayObject['options'] = $this->options;
        $arrayObject['pathName'] = $this->pathName;
        $arrayObject['fullPathName'] = $this->fullPathName;
        $arrayObject['type'] = $this->type;
        $arrayObject['validationGroups'] = $this->validationGroups;

        //get vals in array if entity
        if ($this->type === 'entity') {
            //check if multiple option
            if ($this->options['multiple']) {                
                if (is_array($this->value)) {
                    $arrayEntityValues = array();
                    foreach ($this->value as $val) {
                        $arrayEntity = array();
                        $arrayEntity['id'] = $val->getId();
                        $arrayEntity['value'] = (string) $val;
                        array_push($arrayEntityValues, $arrayEntity);
                    }
                    $arrayObject['value'] = $arrayEntityValues;
                }
            } else {
                if (method_exists($this->value, 'getId')) {
                    $arrayEntity = array();
                    $arrayEntity['id'] = $this->value->getId();
                    $arrayEntity['value'] = (string) $this->value;
                    $arrayObject['value'] = $arrayEntity;
                }
            }

            //add posible choice options
            $arrayObject['dataEntityChoice'] = $this->dataEntityChoice;
            //delete choices created after create FormView
            unset($arrayObject['options']['choices']);
        } else {
            $arrayObject['value'] = $this->value;
        }

        return $arrayObject;
    }

    /**
     * @return string Field name
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * @return string Field name
     */
    public function getName() {
        return $this->pathName[0];
    }

    /**
     * @return array Field full name
     */
    public function getPathName() {
        return $this->pathName;
    }

    /**
     * @return array Validation groups
     */
    public function getValidationGroups() {
        return $this->validationGroups;
    }

    /**
     * @return string Parent class
     */
    public function getDataClass() {
        return $this->dataClass;
    }

    /**
     * @return array Constraints
     */
    public function getConstraints() {
        return $this->constraints;
    }

}
