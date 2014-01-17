#jQueryValidator

##Resources

 - jQuery
 - [http://jqueryvalidation.org/](http://jqueryvalidation.org/)


##How it works

This adapter check the form logic and transform it to json. Then it returns a simple json var to print on the front-end


##How to use it

Easy peasy


####PHP

```php

        //extract and process validation
        $formjq = $this->get('bic_form_validation.form_validation.jq_validation');
        $formjq->generateJQValidation($form);
        $formjq = $formjq->returnJson();

//...

        return array(
            'formValidation' => $formValidation
        );

```

####JS

```js

<!-- add the libraries jquery n jqueryvalidator -->

<script type="text/javascript">

    $(document).ready(function() {
        //get the json validation and assign to a var
        var jsonFormValidationConstraints = {{ jsonFormValidationConstraints|raw }};

        var form = $('form');

        form.validate({
            rules: jsonFormValidationConstraints.rules,
            messages: jsonFormValidationConstraints.messages
        });

        form.submit(function(e) {
            //feel free to do what you want
        }

//...

```


More about:
 - [jQueryValidator Documentation](http://jqueryvalidation.org/documentation/)