# About testing

I just created the scenarios where the bundle should work on. For that I just created complex forms and checking that everything works properly and has the proper responses.

Also I gave up creating a new mock of symfony environment to use the validation and related and I called the AppKernel of a Symfony instance.

*Tested with* Symfony 2.3 and 2.4.



# How to test

##Install phpunit

##From Test Controller

Check the AppKernel url if necessary.

##Run tests

```
phpunit -c phpunit.xml
```

Optional: Cross fingers.