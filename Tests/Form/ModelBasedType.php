<?php

namespace Bic\FormValidationBundle\Tests\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModelBasedType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('notBlank')
                ->add('notNull')
                ->add('true')
                ->add('type')
                ->add('email')
                ->add('length')
                ->add('url')
                ->add('regex')
                ->add('ip')
                ->add('range')
                ->add('equalTo')
                ->add('date')
                ->add('choice')
                ->add('file')
                ->add('currency')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bic\FormValidationBundle\Tests\Model\Model',
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'bic_formvalidationbundle_model_based';
    }

}
