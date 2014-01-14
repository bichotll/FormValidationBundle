FormValidationBundle
====================

The objective of this bundle is to create a abstract object of the form validation to parse it to another tools.

As we know almost every project has forms and validations. Some of them we have to tell to the user which validation
has every form input. Even it is nice for the user to know it before submit the forms, stuff that not always happens, and
even it is hard to implement from javascript (manually).

With this tool you will be able to abstract the form inputs validation and parse to:


##Available Formats

 - jQueryValidator
 

##How it works

Every format has his documentation about how to use it.

But well, about the general use...What easer than example?

####Create the form

```php
        // form Data models
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
```

####Exctract the validation

```php
        //generic object...I think you will not really use it if it is not to extend it
        $formValidation = $this->get('bic_form_validation.form_validation');
        $formValidation->extractValidation($form);
        
        //example jq_validation
        $formjq = $this->get('bic_form_validation.form_validation.jq_validation');
        $formjq->generateJQValidation($form);
        $formjq = $formjq->returnJson();
```

####Return it to the view

```php
        return array(
            'form' => $form->createView(),
            'form_validation' => $formValidation,
            'formjq' => $formjq
        );
```
