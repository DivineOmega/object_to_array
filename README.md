
# `object_to_array` helper function

[![Build Status](https://travis-ci.org/DivineOmega/object_to_array.svg?branch=master)](https://travis-ci.org/DivineOmega/object_to_array)
[![Coverage Status](https://coveralls.io/repos/github/DivineOmega/object_to_array/badge.svg?branch=master)](https://coveralls.io/github/DivineOmega/object_to_array?branch=master)
[![StyleCI](https://styleci.io/repos/121260505/shield?branch=master)](https://styleci.io/repos/121260505)

This PHP package provides an `object_to_array` helper function. You can use this function to convert an object to an array.

## Installation

The `object_to_array` package can be easily installed using Composer. Just run the following command from the root of your project.

```
composer require "divineomega/object_to_array"
```

If you have never used the Composer dependency manager before, head to the [Composer website](https://getcomposer.org/) for more information on how to get started.

## Usage

Here are a few example of how to use the `object_to_array` helper function.

```php
// Basic object

$object = new stdClass;
$object->name = 'John';
$object->age = 32;

$array = object_to_array($object)

/*
$array = [
    'name' => 'John',
    'age' => 32
];
*/
```

```php
// Object with nested object

$object = new stdClass;
$object->name = 'John';
$object->age = 32;
$object->pet = new stdClass;
$object->pet->type = 'cat';
$object->pet->name = 'Mr Fluffkins The Third';

$array = object_to_array($object)

/*
$array = [
    'name' => 'John',
    'age' => 32,
    'pet' => [
        'name' => 'Mr Fluffkins The Third',
        'type' => 'cat'
    ]
];
*/
```

```php
// Object with nested array

$object = new stdClass;
$object->name = 'John';
$object->age = 32;
$object->favouriteFoods = [
    'pizza',
    'cake'
];

$array = object_to_array($object)

/*
$array = [
    'name' => 'John',
    'age' => 32,
    'favouriteFoods' => [
        'pizza',
        'cake'
    ]
];
*/
```