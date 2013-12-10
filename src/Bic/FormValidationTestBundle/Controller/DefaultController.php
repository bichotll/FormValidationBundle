<?php

namespace Bic\FormValidationTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bic\FormValidationTestBundle\Form;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        // get request
        $request = $this->getRequest();
        
        // get extended customer entity
        $formData = array(
            new Form\Model\Register(),
            new Form\Model\Document()
        );

        // form builder
        $formBuilder = $this->container
                ->get('form.factory')
                ->createNamedBuilder('form', 'form', $formData)
                ->add('phone', 'text')
                ->add('password', 'password')
                ->add('document', new Form\Type\DocumentType())
                ->add('submit', 'submit');

        // get form from form builder
        $form = $formBuilder
                ->getForm()
                ->handleRequest($request);
        
        
        
        //testing the form_validation generator...
        $formValidation = $this->get('bic_form_validation.form_validation');
        $formValidation->extractValidation($form);
        
        $formjq = $this->get('bic_form_validation.form_validation.jq_validation');
        $formjq->generateJQValidation($form);
        $formjq = $formjq->returnJson();
        //...
        
        return array(
            'form' => $form->createView(),
            'form_validation' => $formValidation,
            'formjq' => $formjq
        );
    }
    
    /**
     * @Route("/form-type")
     * @Template()
     */
    public function formTypeAction()
    {
        
        return array();
    }
}