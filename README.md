# gdpr-bundle
**A Symfony bundle for anonymizing data according to GDPR requirements**

[![Build Status](https://travis-ci.com/bijsterdee/gdpr-bundle.svg?branch=master)](https://travis-ci.com/bijsterdee/gdpr-bundle.svg?branch=master)
[![Latest Stable Version](https://poser.pugx.org/bijsterdee/gdpr-bundle/v)](//packagist.org/packages/bijsterdee/gdpr-bundle)
[![Total Downloads](https://poser.pugx.org/bijsterdee/gdpr-bundle/downloads)](//packagist.org/packages/bijsterdee/gdpr-bundle)
[![License](https://poser.pugx.org/bijsterdee/gdpr-bundle/license)](//packagist.org/packages/bijsterdee/gdpr-bundle)

Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require bijsterdee/gdpr-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require bijsterdee/gdpr-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    bijsterdee\gdpr-bundle\BijsterdeeGdprBundle::class => ['all' => true],
];
```