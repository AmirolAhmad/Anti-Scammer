<?php

function array_strip_tags($array)
{
    $result = array();
    foreach ($array as $key => $value) {
        $key = strip_tags($key);
        if (is_array($value)) {
            $result[$key] = array_strip_tags($value);
        }
        else {
            $result[$key] = strip_tags($value);
        }
    }
    return $result;
}