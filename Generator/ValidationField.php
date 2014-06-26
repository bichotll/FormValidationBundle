<?php

namespace Bic\FormValidationBundle\Generator;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ValidationField extends ContainerAware {

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
     * @var array Validation constraints
     */
    private $constraints = array();
    
    /**
     * @var string Field type
     */
    private $type;
    
    /**
     * @var string Field options
     */
    private $options;

    /**
     * Note: Return false if is a submit object
     * 
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     * @param \Symfony\Component\Form\FormInterface $form
     * @return boolean
     */
    public function __construct(ContainerInterface $container, \Symfony\Component\Form\FormInterface $form) {
        // set container
        $this->setContainer($container);
        
        //get pathName
        $this->pathName[] = $form->getConfig()->getName();
        $this->getParentPathNames($form);
        
        $this->getFullPathName();

        //break if it's a submit object
        if ($this->pathName[0] == 'submit') {
            return false;
        }

        $this->getParentValidationGroups($form);

        $this->getParentDataClasses($form);

        $this->extractContraints($form);
        
        $this->extractType($form);
        
        $this->extractConfig($form);
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
    private function getFullPathName(){
        $tempPath = array_reverse($this->pathName);
        $this->fullPathName = $tempPath[0].'[';
        for ($i=1;$i<count($tempPath);$i++){
            $this->fullPathName .= $tempPath[$i];
            if ($i != count($tempPath)-1){
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
        if ($parent->getConfig()->getDataClass()) {
            $this->dataClass = $parent->getConfig()->getDataClass();
        } else if ($parent->getConfig()->getData()) {
            $this->dataClass = $parent->getConfig()->getData();
            $this->assignProperDataClass();
        } else {
            $this->getParentDataClasses($parent);
        }
    }

    /**
     * 
     * @return boolean
     */
    private function assignProperDataClass() {
        if (is_array($this->dataClass)) {
            foreach ($this->dataClass as $class) {
                $className = strtolower(get_class($class));
                //todo to change this crappy problem...forgive me, I was upset enough with Symfony forms
                $className = str_replace("\\", '.', $className);
                $className = preg_replace('/[.]?[a-zA-Z]+[.]/', "", $className);
                foreach ($this->pathName as $path) {
                    $path = strtolower($path);
                    if ($path == $className) {
                        $this->dataClass = $class;
                        return true;
                    }
                }
                if (property_exists($class, $this->pathName[0])) {
                    $this->dataClass = get_class($class);
                }
            }
        }
    }

    /**
     * Helper - Extract all the constraints
     */
    private function extractContraints() {
        // get validator
        $validator = $this->container->get('validator');

        // get meta data from entity
        $metadata = $validator->getMetadataFor($this->dataClass);

        // loop through members
        foreach ($metadata->members AS $property => $inner) {
            if ($property == $this->pathName[0]) {
                // init property name index
                $this->constraints = array();

                foreach ($inner AS $definition) {
                    // if group
                    if (empty($this->validationGroups)) {
                        foreach ($definition->constraints AS $ungroupedConstraits) {
                            // add constraint object
                            $this->constraints['default'][] = $ungroupedConstraits;
                        }
                    } else {
                        foreach ($definition->constraintsByGroup AS $constraintGroup => $constraints) {
                            if (in_array($constraintGroup, $this->validationGroups)) {
                                foreach ($constraints AS $constraint) {
                                    $this->constraints[$constraintGroup][] = $constraint;
                                }
                            } else {
                                foreach ($this->validationGroups as $validationGroup) {
                                    if (in_array($constraintGroup, $validationGroup)) {
                                        foreach ($constraints AS $constraint) {
                                            $this->constraints[$constraintGroup][] = $constraint;
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
     * Extracts the form type
     * 
     * @param \Symfony\Component\Form\FormInterface $form
     */
    private function extractType(\Symfony\Component\Form\FormInterface $form) {
        $this->type = $form->getConfig()->getType()->getName();
    }
    
    /**
     * Extracts the form passed options
     * 
     * @param \Symfony\Component\Form\FormInterface $form
     */
    private function extractConfig(\Symfony\Component\Form\FormInterface $form) {
        $options = $form->getConfig()->getAttributes();
        $this->options = $options['data_collector/passed_options'];
    }

    public function toArray(){
        $arrayObject = array();
        
        $arrayObject['constraints'] = $this->constraints;
        $arrayObject['dataClass'] = $this->dataClass;
        $arrayObject['options'] = $this->options;
        $arrayObject['pathName'] = $this->pathName;
        $arrayObject['fullPathName'] = $this->fullPathName;
        $arrayObject['type'] = $this->type;
        $arrayObject['validationGroups'] = $this->validationGroups;
        
        return $arrayObject;
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
