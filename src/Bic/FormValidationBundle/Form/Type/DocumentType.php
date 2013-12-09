<?php

namespace Bic\FormValidationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentType extends AbstractType
{

    public function __construct()
    {
        
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // build document types
        $documentTypes = array(
            1 => 'DNI',
            2 => 'NIE',
            3 => 'Passport'
        );

        $builder
                ->add('type', 'choice', array('choices' => $documentTypes))
                ->add('value', 'text');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bic\FormValidationBundle\Form\Model\Document'
        ));
    }

    public function getName()
    {
        return 'document';
    }

}

