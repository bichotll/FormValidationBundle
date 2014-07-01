##Extracted from the php Unit Test

[Link to the formType](/Tests/Form/InnerFormType.php)

```json
[
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[",
    "type": "bic_formvalidationbundle_inner_form",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "test",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[test]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "test2",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[test2]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "simpleForm",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[simpleForm]",
    "type": "bic_formvalidationbundle_simple",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "simpleForm",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[simpleForm]",
    "type": "bic_formvalidationbundle_simple",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "name",
      "simpleForm",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[simpleForm][name]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "field",
      "simpleForm",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[simpleForm][field]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased]",
    "type": "bic_formvalidationbundle_model_based",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased]",
    "type": "bic_formvalidationbundle_model_based",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value should not be blank.",
          "groups": [
            "group1"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\NotBlank"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": true
    },
    "pathName": [
      "notBlank",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][notBlank]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value should not be null.",
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\NotNull"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": true
    },
    "pathName": [
      "notNull",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][notNull]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value should be true.",
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\True"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": true
    },
    "pathName": [
      "true",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][true]",
    "type": "checkbox",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "The value {{ value }} is not a valid {{ type }}.",
          "type": "integer",
          "groups": [
            "group1"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Type"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false
    },
    "pathName": [
      "type",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][type]",
    "type": "integer",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value is not a valid email address.",
          "checkMX": false,
          "checkHost": false,
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Email"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false
    },
    "pathName": [
      "email",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][email]",
    "type": "email",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "maxMessage": "This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.",
          "minMessage": "This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.",
          "exactMessage": "This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.",
          "max": 50,
          "min": 2,
          "charset": "UTF-8",
          "groups": [
            "group2"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Length"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false,
      "max_length": 50,
      "pattern": ".{2,}"
    },
    "pathName": [
      "length",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][length]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value is not a valid URL.",
          "protocols": [
            "http",
            "https"
          ],
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Url"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false
    },
    "pathName": [
      "url",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][url]",
    "type": "url",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value is not valid.",
          "pattern": "\/^\\w+\/",
          "htmlPattern": null,
          "match": true,
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Regex"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false,
      "pattern": "\\w+.*"
    },
    "pathName": [
      "regex",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][regex]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "version": "4",
          "message": "This is not a valid IP address.",
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Ip"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false
    },
    "pathName": [
      "ip",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][ip]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "minMessage": "This value should be {{ limit }} or more.",
          "maxMessage": "This value should be {{ limit }} or less.",
          "invalidMessage": "This value should be a valid number.",
          "min": 120,
          "max": 180,
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Range"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false,
      "max_length": 3,
      "pattern": ".{3,}"
    },
    "pathName": [
      "range",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][range]",
    "type": "number",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value should be equal to {{ compared_value }}.",
          "value": 20,
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\EqualTo"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false
    },
    "pathName": [
      "equalTo",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][equalTo]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value is not a valid date.",
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Date"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "input": "string",
      "required": false
    },
    "pathName": [
      "date",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][date]",
    "type": "date",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value is not a valid date.",
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Date"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "input": "string",
      "required": false
    },
    "pathName": [
      "date",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][date]",
    "type": "date",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "error_bubbling": true,
      "choices": {
        "2009": "2009",
        "2010": "2010",
        "2011": "2011",
        "2012": "2012",
        "2013": "2013",
        "2014": "2014",
        "2015": "2015",
        "2016": "2016",
        "2017": "2017",
        "2018": "2018",
        "2019": "2019"
      },
      "empty_value": "",
      "required": false,
      "translation_domain": null
    },
    "pathName": [
      "year",
      "date",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][date][year]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "error_bubbling": true,
      "choices": {
        "1": "01",
        "2": "02",
        "3": "03",
        "4": "04",
        "5": "05",
        "6": "06",
        "7": "07",
        "8": "08",
        "9": "09",
        "10": "10",
        "11": "11",
        "12": "12"
      },
      "empty_value": "",
      "required": false,
      "translation_domain": null
    },
    "pathName": [
      "month",
      "date",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][date][month]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "error_bubbling": true,
      "choices": {
        "1": "01",
        "2": "02",
        "3": "03",
        "4": "04",
        "5": "05",
        "6": "06",
        "7": "07",
        "8": "08",
        "9": "09",
        "10": "10",
        "11": "11",
        "12": "12",
        "13": "13",
        "14": "14",
        "15": "15",
        "16": "16",
        "17": "17",
        "18": "18",
        "19": "19",
        "20": "20",
        "21": "21",
        "22": "22",
        "23": "23",
        "24": "24",
        "25": "25",
        "26": "26",
        "27": "27",
        "28": "28",
        "29": "29",
        "30": "30",
        "31": "31"
      },
      "empty_value": "",
      "required": false,
      "translation_domain": null
    },
    "pathName": [
      "day",
      "date",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][date][day]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "choices": [
            "male",
            "female"
          ],
          "callback": null,
          "multiple": false,
          "strict": false,
          "min": null,
          "max": null,
          "message": "Choose a valid gender.",
          "multipleMessage": "One or more of the given values is invalid.",
          "minMessage": "You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.",
          "maxMessage": "You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.",
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Choice"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false
    },
    "pathName": [
      "choice",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][choice]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "maxSize": "1024k",
          "mimeTypes": [
            "application\/pdf",
            "application\/x-pdf"
          ],
          "notFoundMessage": "The file could not be found.",
          "notReadableMessage": "The file is not readable.",
          "maxSizeMessage": "The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.",
          "mimeTypesMessage": "Please upload a valid PDF",
          "uploadIniSizeErrorMessage": "The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.",
          "uploadFormSizeErrorMessage": "The file is too large.",
          "uploadPartialErrorMessage": "The file was only partially uploaded.",
          "uploadNoFileErrorMessage": "No file was uploaded.",
          "uploadNoTmpDirErrorMessage": "No temporary folder was configured in php.ini.",
          "uploadCantWriteErrorMessage": "Cannot write temporary file to disk.",
          "uploadExtensionErrorMessage": "A PHP extension caused the upload to fail.",
          "uploadErrorMessage": "The file could not be uploaded.",
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\File"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false
    },
    "pathName": [
      "file",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][file]",
    "type": "file",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": {
      "default": [
        {
          "message": "This value is not a valid currency.",
          "groups": [
            "Default",
            "Model"
          ],
          "class": "Symfony\\Component\\Validator\\Constraints\\Currency"
        }
      ]
    },
    "dataClass": "Bic\\FormValidationBundle\\Tests\\Model\\Model",
    "options": {
      "required": false
    },
    "pathName": [
      "currency",
      "modelBased",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[modelBased][currency]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes]",
    "type": "bic_formvalidationbundle_simple",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes]",
    "type": "bic_formvalidationbundle_simple",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "text",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][text]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "textarea",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][textarea]",
    "type": "textarea",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "email",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][email]",
    "type": "email",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "integer",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][integer]",
    "type": "integer",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "money",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][money]",
    "type": "money",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "number",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][number]",
    "type": "number",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "password",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][password]",
    "type": "password",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "percent",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][percent]",
    "type": "percent",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "search",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][search]",
    "type": "search",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "url",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][url]",
    "type": "url",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "choice",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][choice]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "country",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][country]",
    "type": "country",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "language",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][language]",
    "type": "language",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "locale",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][locale]",
    "type": "locale",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "timezone",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][timezone]",
    "type": "timezone",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "currency",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][currency]",
    "type": "currency",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "date",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][date]",
    "type": "date",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "date",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][date]",
    "type": "date",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": {
        "2009": "2009",
        "2010": "2010",
        "2011": "2011",
        "2012": "2012",
        "2013": "2013",
        "2014": "2014",
        "2015": "2015",
        "2016": "2016",
        "2017": "2017",
        "2018": "2018",
        "2019": "2019"
      },
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "year",
      "date",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][date][year]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": {
        "1": "01",
        "2": "02",
        "3": "03",
        "4": "04",
        "5": "05",
        "6": "06",
        "7": "07",
        "8": "08",
        "9": "09",
        "10": "10",
        "11": "11",
        "12": "12"
      },
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "month",
      "date",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][date][month]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": {
        "1": "01",
        "2": "02",
        "3": "03",
        "4": "04",
        "5": "05",
        "6": "06",
        "7": "07",
        "8": "08",
        "9": "09",
        "10": "10",
        "11": "11",
        "12": "12",
        "13": "13",
        "14": "14",
        "15": "15",
        "16": "16",
        "17": "17",
        "18": "18",
        "19": "19",
        "20": "20",
        "21": "21",
        "22": "22",
        "23": "23",
        "24": "24",
        "25": "25",
        "26": "26",
        "27": "27",
        "28": "28",
        "29": "29",
        "30": "30",
        "31": "31"
      },
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "day",
      "date",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][date][day]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime]",
    "type": "datetime",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime]",
    "type": "datetime",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "translation_domain": null,
      "required": true,
      "input": "array",
      "error_bubbling": true
    },
    "pathName": [
      "date",
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime][date]",
    "type": "date",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "translation_domain": null,
      "required": true,
      "input": "array",
      "error_bubbling": true
    },
    "pathName": [
      "date",
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime][date]",
    "type": "date",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": {
        "2009": "2009",
        "2010": "2010",
        "2011": "2011",
        "2012": "2012",
        "2013": "2013",
        "2014": "2014",
        "2015": "2015",
        "2016": "2016",
        "2017": "2017",
        "2018": "2018",
        "2019": "2019"
      },
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "year",
      "date",
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime][date][year]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": {
        "1": "01",
        "2": "02",
        "3": "03",
        "4": "04",
        "5": "05",
        "6": "06",
        "7": "07",
        "8": "08",
        "9": "09",
        "10": "10",
        "11": "11",
        "12": "12"
      },
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "month",
      "date",
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime][date][month]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": {
        "1": "01",
        "2": "02",
        "3": "03",
        "4": "04",
        "5": "05",
        "6": "06",
        "7": "07",
        "8": "08",
        "9": "09",
        "10": "10",
        "11": "11",
        "12": "12",
        "13": "13",
        "14": "14",
        "15": "15",
        "16": "16",
        "17": "17",
        "18": "18",
        "19": "19",
        "20": "20",
        "21": "21",
        "22": "22",
        "23": "23",
        "24": "24",
        "25": "25",
        "26": "26",
        "27": "27",
        "28": "28",
        "29": "29",
        "30": "30",
        "31": "31"
      },
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "day",
      "date",
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime][date][day]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "translation_domain": null,
      "required": true,
      "with_minutes": true,
      "with_seconds": false,
      "input": "array",
      "error_bubbling": true
    },
    "pathName": [
      "time",
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime][time]",
    "type": "time",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "translation_domain": null,
      "required": true,
      "with_minutes": true,
      "with_seconds": false,
      "input": "array",
      "error_bubbling": true
    },
    "pathName": [
      "time",
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime][time]",
    "type": "time",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": [
        "00",
        "01",
        "02",
        "03",
        "04",
        "05",
        "06",
        "07",
        "08",
        "09",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "20",
        "21",
        "22",
        "23"
      ],
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "hour",
      "time",
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime][time][hour]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": [
        "00",
        "01",
        "02",
        "03",
        "04",
        "05",
        "06",
        "07",
        "08",
        "09",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "20",
        "21",
        "22",
        "23",
        "24",
        "25",
        "26",
        "27",
        "28",
        "29",
        "30",
        "31",
        "32",
        "33",
        "34",
        "35",
        "36",
        "37",
        "38",
        "39",
        "40",
        "41",
        "42",
        "43",
        "44",
        "45",
        "46",
        "47",
        "48",
        "49",
        "50",
        "51",
        "52",
        "53",
        "54",
        "55",
        "56",
        "57",
        "58",
        "59"
      ],
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "minute",
      "time",
      "datetime",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][datetime][time][minute]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "time",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][time]",
    "type": "time",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "time",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][time]",
    "type": "time",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": [
        "00",
        "01",
        "02",
        "03",
        "04",
        "05",
        "06",
        "07",
        "08",
        "09",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "20",
        "21",
        "22",
        "23"
      ],
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "hour",
      "time",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][time][hour]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": [
        "00",
        "01",
        "02",
        "03",
        "04",
        "05",
        "06",
        "07",
        "08",
        "09",
        "10",
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "20",
        "21",
        "22",
        "23",
        "24",
        "25",
        "26",
        "27",
        "28",
        "29",
        "30",
        "31",
        "32",
        "33",
        "34",
        "35",
        "36",
        "37",
        "38",
        "39",
        "40",
        "41",
        "42",
        "43",
        "44",
        "45",
        "46",
        "47",
        "48",
        "49",
        "50",
        "51",
        "52",
        "53",
        "54",
        "55",
        "56",
        "57",
        "58",
        "59"
      ],
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "minute",
      "time",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][time][minute]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "birthday",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][birthday]",
    "type": "birthday",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "birthday",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][birthday]",
    "type": "birthday",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": {
        "1894": "1894",
        "1895": "1895",
        "1896": "1896",
        "1897": "1897",
        "1898": "1898",
        "1899": "1899",
        "1900": "1900",
        "1901": "1901",
        "1902": "1902",
        "1903": "1903",
        "1904": "1904",
        "1905": "1905",
        "1906": "1906",
        "1907": "1907",
        "1908": "1908",
        "1909": "1909",
        "1910": "1910",
        "1911": "1911",
        "1912": "1912",
        "1913": "1913",
        "1914": "1914",
        "1915": "1915",
        "1916": "1916",
        "1917": "1917",
        "1918": "1918",
        "1919": "1919",
        "1920": "1920",
        "1921": "1921",
        "1922": "1922",
        "1923": "1923",
        "1924": "1924",
        "1925": "1925",
        "1926": "1926",
        "1927": "1927",
        "1928": "1928",
        "1929": "1929",
        "1930": "1930",
        "1931": "1931",
        "1932": "1932",
        "1933": "1933",
        "1934": "1934",
        "1935": "1935",
        "1936": "1936",
        "1937": "1937",
        "1938": "1938",
        "1939": "1939",
        "1940": "1940",
        "1941": "1941",
        "1942": "1942",
        "1943": "1943",
        "1944": "1944",
        "1945": "1945",
        "1946": "1946",
        "1947": "1947",
        "1948": "1948",
        "1949": "1949",
        "1950": "1950",
        "1951": "1951",
        "1952": "1952",
        "1953": "1953",
        "1954": "1954",
        "1955": "1955",
        "1956": "1956",
        "1957": "1957",
        "1958": "1958",
        "1959": "1959",
        "1960": "1960",
        "1961": "1961",
        "1962": "1962",
        "1963": "1963",
        "1964": "1964",
        "1965": "1965",
        "1966": "1966",
        "1967": "1967",
        "1968": "1968",
        "1969": "1969",
        "1970": "1970",
        "1971": "1971",
        "1972": "1972",
        "1973": "1973",
        "1974": "1974",
        "1975": "1975",
        "1976": "1976",
        "1977": "1977",
        "1978": "1978",
        "1979": "1979",
        "1980": "1980",
        "1981": "1981",
        "1982": "1982",
        "1983": "1983",
        "1984": "1984",
        "1985": "1985",
        "1986": "1986",
        "1987": "1987",
        "1988": "1988",
        "1989": "1989",
        "1990": "1990",
        "1991": "1991",
        "1992": "1992",
        "1993": "1993",
        "1994": "1994",
        "1995": "1995",
        "1996": "1996",
        "1997": "1997",
        "1998": "1998",
        "1999": "1999",
        "2000": "2000",
        "2001": "2001",
        "2002": "2002",
        "2003": "2003",
        "2004": "2004",
        "2005": "2005",
        "2006": "2006",
        "2007": "2007",
        "2008": "2008",
        "2009": "2009",
        "2010": "2010",
        "2011": "2011",
        "2012": "2012",
        "2013": "2013",
        "2014": "2014"
      },
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "year",
      "birthday",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][birthday][year]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": {
        "1": "01",
        "2": "02",
        "3": "03",
        "4": "04",
        "5": "05",
        "6": "06",
        "7": "07",
        "8": "08",
        "9": "09",
        "10": "10",
        "11": "11",
        "12": "12"
      },
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "month",
      "birthday",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][birthday][month]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": true,
      "choices": {
        "1": "01",
        "2": "02",
        "3": "03",
        "4": "04",
        "5": "05",
        "6": "06",
        "7": "07",
        "8": "08",
        "9": "09",
        "10": "10",
        "11": "11",
        "12": "12",
        "13": "13",
        "14": "14",
        "15": "15",
        "16": "16",
        "17": "17",
        "18": "18",
        "19": "19",
        "20": "20",
        "21": "21",
        "22": "22",
        "23": "23",
        "24": "24",
        "25": "25",
        "26": "26",
        "27": "27",
        "28": "28",
        "29": "29",
        "30": "30",
        "31": "31"
      },
      "empty_value": null,
      "required": true,
      "translation_domain": null
    },
    "pathName": [
      "day",
      "birthday",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][birthday][day]",
    "type": "choice",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "checkbox",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][checkbox]",
    "type": "checkbox",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "file",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][file]",
    "type": "file",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "radio",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][radio]",
    "type": "radio",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "collection",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][collection]",
    "type": "collection",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "repeated",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][repeated]",
    "type": "repeated",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "repeated",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][repeated]",
    "type": "repeated",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": false,
      "required": true
    },
    "pathName": [
      "first",
      "repeated",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][repeated][first]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": {
      "error_bubbling": false,
      "required": true
    },
    "pathName": [
      "second",
      "repeated",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][repeated][second]",
    "type": "text",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "hidden",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][hidden]",
    "type": "hidden",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "button",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][button]",
    "type": "button",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "reset",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][reset]",
    "type": "reset",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "submit",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][submit]",
    "type": "submit",
    "validationGroups": [
      
    ]
  },
  {
    "constraints": [
      
    ],
    "dataClass": null,
    "options": [
      
    ],
    "pathName": [
      "form",
      "formTypes",
      "bic_formvalidationbundle_inner_form"
    ],
    "fullPathName": "bic_formvalidationbundle_inner_form[formTypes][form]",
    "type": "form",
    "validationGroups": [
      
    ]
  }
]
```