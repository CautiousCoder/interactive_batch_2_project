<?php
    // Problem 1
    // input list of integers as a string
    // explode string into array
    $arr = explode(' ', readline());
    
    // negative value convert to positive
    $non_negative_array = [];
    foreach($arr as $element){
        $integer_number = intval($element);
        if($integer_number < 0){
            array_push($non_negative_array, -1*$integer_number);
            continue;
        }
        array_push($non_negative_array, $integer_number);
    }
    
    // get minimum value
    $min = $non_negative_array[0];
    foreach($non_negative_array as $p){
        if($p < $min) $min = $p;
    }
    
    // output
    echo $min."\n";
    // print
    // print_r($non_negative_array);
