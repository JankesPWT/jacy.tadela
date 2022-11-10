<?php

# otwieranie pliku i wczytanie zawartości
$filename = "Checkmarks.csv";
$file = fopen($filename, 'r');
$fread = fread($file, filesize($filename));

# eksplozja + obcinka
$array = explode("#", $fread);

$reverse = array_reverse($array);
$shift = array_shift($reverse);

# pierwszy dzień danych
$prevDay = new DateTime('2013-11-25');

foreach ($reverse as $dzien) {
    
    $today = new DateTime($dzien);
    $dtx = $prevDay->diff($today)->days;
    
    if ($dtx > 23) {
        echo $dzien . " - " . $dtx . '<br>';
    }

    $prevDay = new DateTime($dzien);
}
