FormValidationBundle
====================

The objective of this bundle is to create a abstract and generic object of the form information to parse it to another tools (Javascript or maybe PHP tools).

For instance: It can help you to addapt this information to javascript validation logic for the forms.
 

##Instalation

####Composer
```shell
composer require bic/form-validation
```

####Enable the bundle
```php
//...
new Bic\FormValidationBundle\BicFormValidationBundle()
//...
```


##How it works

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

####Extract the validation

```php
        $formValidation = $this->get('bic_form_validation.form_validation');
        //returns FormValidation object
        $formValidation->extractValidation($form);
        //returns fields array
        $formValidation->getFields();
        //returns json object
        $formJson = $formValidation->toJson();
```

####Return it to the view

```php
        return array(
            //...
            'form_validation' => $formJson,
            //...
        );
```
And do whatever you want with it.


##Last changes
 - Added more form information
 - Removed jQValidation generator
 - Removed generator folder and strategy. Now the parsers will be aplied externally.


##Known errors
 - Does not work with complex forms. (to fix).


##TODO
 - Unit Testing
 - Fix known errors
 - Create associated js parsers like ParsleyJs