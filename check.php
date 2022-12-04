<?php

// $a = true;
// $b = false;

// $c = $a ?: 'n';

// echo $c;

$a = '1';
$b = &$a;
$b = "2$b";

echo $a;
echo '<br>';
echo $a . ", " . $b;