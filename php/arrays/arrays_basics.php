<?php

# man: https://www.php.net/manual/en/ref.array.php
# source: Program with  Gio - https://www.youtube.com/watch?v=C8ZFLq24g_A
# link: https://phpkurs.pl/tablice/
# link: https://www.medianauka.pl/tablice-php


# używać [] a nie array()

/* indexed, numeryczna */
$array = ['jeden', 'dwa', 'trzy', 'cztery'];

echo $array[0] . '<br>'; // jeden

$array[4] = 'pięć'; // dodanie elementu z indexem 4

# liczenie
echo count($array) . '<br>'; // 5

# dokłada element-y na koniec tablicy 
array_push($array, 'sześć', 'siedem');

echo '<pre>';
print_r($array);
echo'</pre>';

# usuwa ostatni element tablicy i zapisuje go w zmiennej
echo $arrayLast = array_pop($array); // siedem
echo '<br>';

# usuwa pierwszy element tablicy i zapisuje go w zmiennej 
    # * reindexuje numeryczne klucze w tablicy
echo $arrayFirst = array_shift($array); // jeden

# usuwa, ale nie reindexuje
unset($array[2]);

echo '<pre>';
print_r($array);
echo'</pre>';


/* associative array, tablica asocjacyjna */
$person = [
    'name'    => 'Jan',
    'age'     => 26,
    'address' => 'Kwiatowa 1',
    'email'   => 'jan@example.com'
];

/* multi-dimensional */
$people = [$person, 'Piotr', 'Adrian', 'Marek', 'Adam'];

echo '<pre>';
print_r($people);
echo'</pre>';


# casting to array
$x = 5;

print_r((array) $x);