<?php

if (!function_exists('object_to_array')) {
    function object_to_array($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }

        return array_map('object_to_array', (array) $object);
    }
}
