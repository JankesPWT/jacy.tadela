<?php

# https://www.php.net/manual/en/types.comparisons.php

# https://www.php.net/manual/en/language.types.type-juggling.php
# Type Juggling / Type Coertion - automatyczna zmiana typu zmiennej w zależności od kontekstu (np. string na int)

# Scalar Types
    # bool - true / false
    # int - 1, 2, 3
    # float - 0.99, 2.5
    # string - "elo"

# Compund Types
    # array
    # object
    # callable
    # iterable

# Special Types
    # resource
    # null

/* BOOLEANS */
$isComplete = false;
echo is_bool($isComplete); // 1

// integers - 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

var_dump($isComplete);

/* INTEGERS */
echo PHP_INT_MAX . '<br>';
echo PHP_INT_MIN . '<br>';

$x = 1_000_000; // 1000000
echo is_int($x) . '<br>'; // 1
echo $x . '<br>'; // 1000000

/* FLOATS */
echo PHP_FLOAT_MAX . '<br>';
echo PHP_FLOAT_MIN . '<br>';

$y = 1.5;
echo is_float($y); // 1
echo $floor = floor($y); // 1
echo $ceil = ceil($y); // 2
echo PHP_FLOAT_MAX * 2; // INF

/* STRINGS */
$firstName = 'Jacek';
$lastName = "$firstName Polit"; // Jacek Polit