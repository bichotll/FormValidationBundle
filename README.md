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


##json form example

```json
[
    {
        constraints: [ ],
        dataClass: "Bic\Voucher\EntityBundle\Entity\Category",
        options: {
            choices: {
                m: "Male",
                f: "Female"
            },
            required: false,
            empty_value: "Choose your gender",
            empty_data: null
        },
        pathName: [
            "name",
            "bic_voucher_entitybundle_category"
        ],
        fullPathName: "bic_voucher_entitybundle_category[name]",
        type: "choice",
        validationGroups: [ ]
    },
    {
    constraints: [ ],
        dataClass: "Bic\Voucher\EntityBundle\Entity\Category",
        options: {
            required: false
        },
        pathName: [
            "miniDescription",
            "bic_voucher_entitybundle_category"
        ],
        fullPathName: "bic_voucher_entitybundle_category[miniDescription]",
        type: "textarea",
        validationGroups: [ ]
    }
]
```

##Last changes
 - Parent forms not avoided
 - Submit buttons not avoided
 - Added more form information
 - Removed jQValidation generator
 - Removed generator folder and strategy. Now the parsers will be aplied externally.


##Known errors
 - Does not work with complex forms. (to fix).


##Wiki

[How to test it](Resources/doc/testing.md)


##TODO
 - Unit Testing
..- Change "Container" dependency for \Generator classes. Not all the container is needed. Inject just validator object.
 - Fix known errors
 - Create associated js parsers like ParsleyJs and js form generator script. (Out of project).
 - Provide better and complete json example