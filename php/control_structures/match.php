<?php 

# man: https://www.php.net/manual/en/control-structures.match.php

/*
 * Dostępne od PHP8
 * 
 * Porównania:
    switch: ==
     match: ===
*/

$i = 2;

$matchResult = match ($i) {
    1 => 'jeden',
    2, 3 => 'dwa lub trzy',
    4 => 'cztery',
    default => 'nima'
};

echo $matchResult;

