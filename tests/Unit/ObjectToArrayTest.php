<?php

use PHPUnit\Framework\TestCase;

class ObjectToArrayTest extends TestCase
{
    public function testBasicUsage()
    {
        $object = new stdClass;
        $object->name = 'John';
        $object->age = 32;

        $expected = [
            'name' => 'John',
            'age' => 32
        ];

        $this->assertEquals($expected, object_to_array($object));
    }

    public function testNested()
    {
        $object = new stdClass;
        $object->name = 'John';
        $object->age = 32;
        $object->pet = new stdClass;
        $object->pet->type = 'cat';
        $object->pet->name = 'Mr Fluffkins The Third';

        $expected = [
            'name' => 'John',
            'age' => 32,
            'pet' => [
                'name' => 'Mr Fluffkins The Third',
                'type' => 'cat'
            ]
        ];

        $this->assertEquals($expected, object_to_array($object));
    }

    public function testArray()
    {
        $object = new stdClass;
        $object->name = 'John';
        $object->age = 32;
        $object->favouriteFoods = [
            'pizza',
            'cake'
        ];

        $expected = [
            'name' => 'John',
            'age' => 32,
            'favouriteFoods' => [
                'pizza',
                'cake'
            ]
        ];

        $this->assertEquals($expected, object_to_array($object));
    }

}