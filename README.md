FormValidationBundle
====================

The objective of this bundle is to create a abstract and generic object of the form information to parse it to another tools (Javascript or maybe PHP tools).

For instance: It can help you to addapt this information to javascript validation logic for the forms.
 

##Dependencies

Check composer.json of the current version.


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
        // (http://www.interesarte.com/wp-content/uploads/2013/05/willsmith.jpg)
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
        constraints: [ 
            "Default": [
                {
                    "message": "This value should not be null.",
                    "groups": [
                        "Default",
                        "Model"
                    ],
                    "class": "Symfony\\Component\\Validator\\Constraints\\NotNull"
                }
            ]
        ],
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
        value: '',
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
        value: '',
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

[Full example](Resources/doc/fullExample.md)

##Last changes
 - Added entity results from the FormView object (dataEntityChoice property)
 - Added JMS Serializer as dependency to get the entity type value and parse it to json
 - Added value property. It has the value of the field.
 - Removed the possibility to get the class name from the data passed
 - Provide better and complete json example (from TODO)
 - Create associated js parsers like ParsleyJs and js form generator script. (Out of project) (from TODO)
 - FIXED - Does not work with complex forms. (from Known errors)
 - More unit testing (from TODO)
 - General info of form added
 - Created first unit testing to check the bundle is working with complex forms
 - Fix known errors (from TODO)
 - Parent forms not avoided
 - Submit buttons not avoided
 - Added more form information
 - Removed jQValidation generator
 - Removed generator folder and strategy. Now the parsers will be aplied externally.


##Related resources

###[Js form creator](https://github.com/bichotll/Symfony-FormValidationBundle-js-parser)
It creates the form from the json information.
[https://github.com/bichotll/Symfony-FormValidationBundle-js-parser](https://github.com/bichotll/Symfony-FormValidationBundle-js-parser)

###[Js ParsleyJS parser](https://github.com/bichotll/Symfony-FormValidationBundle-ParsleyJS-parser)
It applies the ParsleyJS validation from the Symfony-FormValidationBundle-js-parser form object or existing one using FormValidationBundle object
[https://github.com/bichotll/Symfony-FormValidationBundle-ParsleyJS-parser](https://github.com/bichotll/Symfony-FormValidationBundle-ParsleyJS-parser)


##Wiki

[How to test it](Resources/doc/testing.md)
[Full example](Resources/doc/fullExample.md)


##TODO
 - Proper unit test. Until the next change I will not check the responses programatically.
 - Unit test using a mock of container, etc.
 - Test entity type.