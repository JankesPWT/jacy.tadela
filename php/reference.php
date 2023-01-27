<?php

$x = 1;
$y = $x; //assign by value

$x = 2;

echo $y; // 1

#--------------------------------

$a = 1;
$b = &$a; //assign by reference

$a = 2;

echo $b; // 2

/*
$a &= $b is short for $a = $a & $b which is the bitwise-and operator.
$a =& $b assigns $a as a reference to $b.
*/