<?php

# man: https://www.php.net/manual/en/control-structures.foreach.php

$array = ['jeden', 'dwa', 'trzy', 'cztery', 'pięć'];

foreach($array as $liczba) {
    echo $liczba . '<br>';
}

echo '<hr>';

foreach($array as $key => $value) {
    echo $key . ' - ' . $value . '<br>';
}

echo $value; // pięć // zmienna $value nie zostaje zniszczona po zakończeniu foreacha