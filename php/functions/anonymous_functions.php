<?php
/* ANONYMOUS FUNCTIONS */

# man: https://www.php.net/manual/en/functions.anonymous.php

# link: Program with Gio - https://www.youtube.com/watch?v=7_FOIxYLF-s

$x = 1;

$sum = function (...$numbers) use ($x) {
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 5);