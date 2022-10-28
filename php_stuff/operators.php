<?php
# 1 - ?:  - Ternary Operator - skrócony if
# 2 - ??  - Null Coalescing Operator - isset
# 3 - ??= - 
# -----

# 1
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

# 2
// Example usage for: Null Coalesce Operator
$action = $_POST['action'] ?? 'default';

// The above is identical to this if/else statement
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'default';
}

# pierwsza zmienna od lewej, która istnieje i nie jest pusta
echo $test ?? $test1 ?? $test2;

# 3
# Short and sweet: $foo = $foo ?? 'bar' can be shortened to $foo ??= 'bar'
#