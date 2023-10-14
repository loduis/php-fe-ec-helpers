<?php

declare(strict_types=1);

namespace FEEC;

use ArrayObject;

function arr_obj($entries, $options = ArrayObject::ARRAY_AS_PROPS | ArrayObject::STD_PROP_LIST): ArrayObject 
{
    if ($entries instanceof ArrayObject) {
        return $entries;
    }
    foreach ($entries as $key => $entry){
        if (is_array($entry)) {
            $entries[$key] = arr_obj($entry, $options);
        }
    }

    return new ArrayObject($entries, $options);
}

function get_key(...$entries): string 
{

    $key = implode('', $entries);

    $sum = 0;
    foreach (str_split(strrev($key)) as $i => $val) {
        if ($i % 6 === 0) {
            $factor = 2;
        }
        $sum += $val * $factor;
        $factor ++;
    }
    $result = 11 - ($sum % 11);
    if ($result > 9) {
        $result = 11 - $result;
    }

    return $key . $result;
}
