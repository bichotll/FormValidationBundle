<?php

namespace Bic\FormValidationBundle\Tests\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InnerFormType extends AbstractType {
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('test')
                ->add('test2')
                ->add('simpleForm', new SimpleType())
                ->add('modelBased', new ModelBasedType())
                ->add('formTypes', new FormTypesType())
                ;
    }

    /**
     * @return string
     */
    public function getName() {
        return 'bic_formvalidationbundle_inner_form';
    }
}
