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