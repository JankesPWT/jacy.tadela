<?php

# używać [] a nie array()

$tablica[0] = "Wpis numer 0";
$tablice[1] = "Wpis numer 1";
$tablica[2] = "Wpis numer 2";

echo $tablica[2]; // Wyświetlony zostanie napis "Wpis numer 2";

//
$people = ['Jan', 'Piotr', 'Adrian', 'Marek', 'Adam'];
$people = [
    'Jan',
    'Piotr',
    'Adrian',
    'Marek',
    'Adam'
];

//
$person = [
    'name'    => 'Jan',
    'age'     => 26,
    'address' => 'Kwiatowa 1',
    'email'   => 'jan@example.com'
];
//

var_dump(...['Jan', 'Piotr', 'Marek']);