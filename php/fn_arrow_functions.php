<?php

/**
 * ARROW FUNCTIONS
 * funkcje strzałkowe(?)
 * 
 * fn (arguments) => expression
 *
 */


$myArr = [1, 2, 3, 4, 5, 6];
$doubledValues = array_map(fn ($var) => $var * 2, $myArr);

// to samo, co to

$myArr = [1, 2, 3, 4, 5, 6];
$doubledValues = array_map(function ($var) {
    return $var * 2;
}, $myArr);
