<?php

setcookie(
    'username',
    'Jacek',
    time() + 10,
    '/',
    '',
    false,
    false
);

echo '<pre>';
print_r($_COOKIE);
echo'</pre>';