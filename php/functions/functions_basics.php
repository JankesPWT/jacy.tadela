<?php
declare(strict_types=1);

# man: https://www.php.net/manual/en/language.functions.php
# link: https://www.phptutorial.net/php-tutorial/php-type-hints/

function fun($parameter)
{
    return $parameter;
}
echo fun($argument = 1) . '<br>';

/**
 * types:
 * mixed = object|resource|array|string|int|float|bool|null
 * iterable = Traversable|array
 */

# znak zapytania to nullable type
function sum(?int $x, int|float $y): ?int // parameters
{ 
    return $x + $y;
}
echo sum(null, 2) . '<br>'; //arguments

# if a function doesn’t return a value : void
function dd($data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}

# if a function returns a value of several types, you can declare it as a union type
function add($x, $y): int | float
{
    return $x * $y;
}
echo add(10, 20) . '<br>'; // 200 (int) 
echo add(1.5, 2.5) . '<br>'; // 3.75 (float)


/* NAMED ARGUMENT */
function name($firstName, $lastName): string
{
    $name = $firstName . ' ' . $lastName;
    return $name;
}

echo name(lastName: 'Polit', firstName: 'Jacek');