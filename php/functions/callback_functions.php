<?php
/* CALLBACK FUNCTIONS */

# man: https://www.php.net/manual/en/language.types.callable.php
# link: https://www.w3schools.com/php/php_callback_functions.asp
# link: Program with Gio - https://www.youtube.com/watch?v=7_FOIxYLF-s

/**
 * anonymous classes are insances of closures
 * closure must be an anonymous function
 * callabe can be normal function
 */

$array = [1, 2, 3, 4];

//anonimowa funkcja, która jest callbackiem
$callback = function ($element) {
    return $element * 2;
};

$array2 = array_map($callback, $array);

echo '<pre>';
print_r($array);
print_r($array2);
echo'</pre>';