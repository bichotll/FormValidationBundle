<?php

namespace Bic\FormValidationBundle\Generator\Format;

use Bic\FormValidationBundle\Generator;

/**
 * Description of JQueryValidator
 *
 * @author jaume.tarradasllort
 */
class JQueryValidator extends Generator\FormValidation {

    private $jQResult;
    
    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container) {
        parent::__construct($container);
    }

    public function generateJQValidation($form) {
        //extract validation
        $this->extractValidation($form);

        $this->jQResult = array();

        foreach ($this->fields as $field) {
            foreach ($field->getConstraints() AS $groupName => $constraints) {
                foreach ($constraints AS $index => $constraint) {
                    //generate proper fieldName for jQValidation
                    $pathName = $field->getPathName();
                    $nameForm = array_pop($pathName);
                    $fieldName = $nameForm.'['.implode('][', $pathName).']';
                    
                    //set n parse className
                    $className = preg_replace("/[a-zA-Z]*[\\\]/", "", get_class($constraint));

                    //set constraint as array
                    $contraint = (array) $constraint;

                    //translate the messages
                    if (isset($contraint['message'])) {
                        $contraint['message'] = $this->container->get('translator')->trans($contraint['message'], array(), 'validators');
                    }
                    if (isset($contraint['maxMessage'])) {
                        $contraint['maxMessage'] = $this->container->get('translator')->trans($contraint['maxMessage'], array(), 'validators');
                    }
                    if (isset($contraint['minMessage'])) {
                        $contraint['minMessage'] = $this->container->get('translator')->trans($contraint['minMessage'], array(), 'validators');
                    }

                    //parse constraints
                    switch ($className) {
                        case 'NotBlank':
                            $this->jQResult['rules'][$fieldName]['required'] = true;
                            $this->jQResult['messages'][$fieldName]['required'] = $contraint['message'];
                            break;
                        case 'Length':
                            if ($contraint['max']) {
                                $this->jQResult['rules'][$fieldName]['maxlength'] = $contraint['max'];
                                if ($contraint['maxMessage']) {
                                    $contraint['maxMessage'] = str_replace('{{ limit }}', $contraint['max'], $contraint['maxMessage']);

                                    //explode | to avoid message problem and provide it just once
                                    if (strpos($contraint['maxMessage'], '|') !== false) {
                                        $contraint['maxMessage'] = explode('|', $contraint['maxMessage']);
                                        $this->jQResult['messages'][$fieldName]['maxlength'] = $contraint['maxMessage'][0];
                                    } else {
                                        $this->jQResult['messages'][$fieldName]['maxlength'] = $contraint['maxMessage'];
                                    }
                                }
                            }
                            if ($contraint['min']) {
                                $this->jQResult['rules'][$fieldName]['minlength'] = $contraint['min'];
                                if ($contraint['minMessage']) {
                                    $contraint['minMessage'] = str_replace('{{ limit }}', $contraint['min'], $contraint['minMessage']);

                                    //explode | to avoid message problem and provide it just once
                                    if (strpos($contraint['minMessage'], '|') !== false) {
                                        $contraint['minMessage'] = explode('|', $contraint['minMessage']);
                                        $this->jQResult['messages'][$fieldName]['minlength'] = $contraint['minMessage'][0];
                                    } else {
                                        $this->jQResult['messages'][$fieldName]['minlength'] = $contraint['minMessage'];
                                    }
                                }
                            }
                            break;
                        case 'Email':
                            $this->jQResult['rules'][$fieldName]['email'] = true;
                            $this->jQResult['messages'][$fieldName]['email'] = $contraint['message'];
                            break;
                        case 'Regex':
                            $this->jQResult['rules'][$fieldName]['pattern'] = str_replace('p{L}', '\p{L}', $contraint['pattern']);
                            $this->jQResult['messages'][$fieldName]['pattern'] = $contraint['message'];
                            break;
                        case 'Date':
                            $this->jQResult['rules'][$fieldName]['date'] = true;
                            $this->jQResult['messages'][$fieldName]['date'] = $contraint['message'];
                            break;
                        case 'Email':
                            $this->jQResult['rules'][$fieldName]['email'] = true;
                            $this->jQResult['messages'][$fieldName]['email'] = $contraint['message'];
                            break;
                        case 'Range':
                            if ($contraint['min']){
                                $this->jQResult['rules'][$fieldName]['min'] = $contraint['min'];
                            }
                            if ($contraint['max']){
                                $this->jQResult['rules'][$fieldName]['max'] = $contraint['max'];
                            }
                            if ($contraint['maxMessage']){
                                $this->jQResult['messages'][$fieldName]['min'] = $contraint['maxMessage'];
                            }
                            if ($contraint['minMessage']){
                                $this->jQResult['messages'][$fieldName]['max'] = $contraint['minMessage'];
                            }
                            break;
                    }
                }
            }
        }
    }

    public function returnJson() {
        $json = json_encode($this->jQResult);

        // We need to have two backslashes for the p{L}.
        // To achieve it we had to add extra backslash for the patten above.
        // json_encode is adding extra backslashes too. We need to removed them and have only 3
        $json = str_replace('\\\\\\\\', '\\\\\\', $json);

        // We need to remove the Unicode indictor from the end of the pattern.
        // JS Does not like it.
        $json = str_replace('\/u', '\/', $json);

        return $json;
    }

}
