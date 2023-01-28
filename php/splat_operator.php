<?php
#TODO
# splat operator, ellipsis, unpacking operator, packing operator, three dots operator, spread operator
function sum($a, $b, $c) {
    return $a + $b + $c;
}

$operators = [2, 3, 4];
echo sum(1, ...$operators);
echo '<br>';

function suma(...$numbers)
{
    return array_sum($numbers);
}

echo suma(1, 2, 3, 5);