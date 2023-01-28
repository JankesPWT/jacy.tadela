<?php
# man: https://www.php.net/manual/en/language.operators.php
# link: https://www.w3schools.com/php/php_operators.asp

# 1 - ?:  - Ternary Operator - skrócony if
# 2 - ??  - Null Coalescing Operator - isset
# 3 - ??= - 
# -----

# 1 ##################################################################
// (warunek) ? [prawda] : [fałsz]
// można opuścić środek

// Example usage for: Ternary Operator
$action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

// The above is identical to this if/else statement
if (empty($_POST['action'])) {
    $action = 'default';
} else {
    $action = $_POST['action'];
}

# 2 ##################################################################
// Example usage for: Null Coalesce Operator
$action = $_POST['action'] ?? 'default';

// The above is identical to this if/else statement
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'default';
}

# pierwsza zmienna od lewej, która istnieje i nie jest pusta
$test = 'jedynka';
echo $test ?? $test1 ?? $test2;

# 3 ##################################################################
# Short and sweet: $foo = $foo ?? 'bar' can be shortened to $foo ??= 'bar'


/* INCREMENT/DECREMENT OPERATORS */

$x = 5;
echo $x++; // 5 // Returns $x, 
echo $x;  // 6 //  then increments $x by one.

echo $x--; // 6 // Returns $x,
echo $x;  // 5 //  then decrements $x by one.

echo ++$x; // 6 // Increments $x by one, 
echo $x;  // 6 //  then returns $x.

echo --$x; // 5 // Decrements $x by one,
echo $x;  // 5 //  then returns $x.