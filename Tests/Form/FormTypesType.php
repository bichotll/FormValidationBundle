<?php

namespace Bic\FormValidationBundle\Tests\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormTypesType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('text')
                ->add('textarea')
                ->add('email')
                ->add('integer')
                ->add('money')
                ->add('number')
                ->add('password')
                ->add('percent')
                ->add('search')
                ->add('url')
                ->add('choice')
                ->add('entity')
                ->add('country')
                ->add('language')
                ->add('locale')
                ->add('timezone')
                ->add('currency')
                ->add('date')
                ->add('datetime')
                ->add('time')
                ->add('birthday')
                ->add('checkbox')
                ->add('file')
                ->add('radio')
                ->add('collection')
                ->add('repeated')
                ->add('hidden')
                ->add('button')
                ->add('reset')
                ->add('submit')
                ->add('form')
        ;
    }

    /**
     * @return string
     */
    public function getName() {
        return 'bic_formvalidationbundle_simple';
    }

}
