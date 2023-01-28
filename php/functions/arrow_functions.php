<?php
/* ARROW FUNCTIONS - funkcje strzałkowe */

# man: https://www.php.net/manual/en/functions.arrow.php

# source: Program with Gio - https://www.youtube.com/watch?v=7_FOIxYLF-s

/**
 * fn ($arguments) => expression
 */

$myArr = [1, 2, 3, 4, 5, 6];
$doubledValues = array_map(fn ($var) => $var * 2, $myArr);

// to samo, co to

$myArr = [1, 2, 3, 4, 5, 6];
$doubledValues = array_map(function ($var) {
    return $var * 2;
}, $myArr);
