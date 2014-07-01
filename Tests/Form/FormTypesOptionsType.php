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
                ->add('text', 'text')
                ->add('textarea', 'textarea')
                ->add('email', 'email')
                ->add('integer', 'integer')
                ->add('money', 'money')
                ->add('number', 'number')
                ->add('password', 'password')
                ->add('percent', 'percent')
                ->add('search', 'search')
                ->add('url', 'url')
                ->add('choice', 'choice')
                ->add('entity', 'entity')
                ->add('country', 'country')
                ->add('language', 'language')
                ->add('locale', 'locale')
                ->add('timezone', 'timezone')
                ->add('currency', 'currency')
                ->add('date', 'date')
                ->add('datetime', 'datetime')
                ->add('time', 'time')
                ->add('birthday', 'birthday')
                ->add('checkbox', 'checkbox')
                ->add('file', 'file')
                ->add('radio', 'radio')
                ->add('collection', 'collection')
                ->add('repeated', 'repeated')
                ->add('hidden', 'hidden')
                ->add('button', 'button')
                ->add('reset', 'reset')
                ->add('submit', 'submit')
                ->add('form', 'form')
        ;
    }

    /**
     * @return string
     */
    public function getName() {
        return 'bic_formvalidationbundle_form_types';
    }

}
