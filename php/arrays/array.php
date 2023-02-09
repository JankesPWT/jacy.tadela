<?php
require '../helpers.php';

# man: https://www.php.net/manual/en/ref.array.php

$array = ['jeden', 'dwa', 'trzy', 'cztery', 'pięć'];
$array1 = ['a', 'b', 'c', 'd', 'e'];
$array2 = [1, 2, 3, 4, 5];

# dzieli tablice na mniejsze z podaną liczbą elemenów
prr(array_chunk($array, 3));

# łączy tablice, bierze klucze z pierwsze i wartości z drugiej
prr(array_combine($array1, $array2));

# przechodzi przez każdy element tablicy i wykonuje na nim funkcje
//nie zmienia wartości, tylko filtruje
$even = array_filter($array2, fn($value) => $value % 2 == 0);
prr($even);

# wyszukuje klucze w tablicy
$klucz = array_keys($array, 'dwa'); // 1
prr($klucz);

# przechodzi przez tablicę i wykonuje na niej funkcje
$doubledValues = array_map(fn ($var) => $var * 2, $array2);

# listuje do zmiennych elementy tablicy
list($a, $b, $c) = $array1;
echo $a . $b . $c; // abc
//to samo
[$a1, $b1, $c1] = $array2;
echo $a1 . $b1 . $c1; // 123

