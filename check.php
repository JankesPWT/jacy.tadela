<?php

// $a = true;
// $b = false;

// $c = $a ?: 'n';

// echo $c;

$a = '1';
$a = $a++;
$b = &$a;
$b = "2$b";

echo $a;
echo '<br>';
echo $a . ", " . $b;