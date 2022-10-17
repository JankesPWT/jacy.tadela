<?php

#otwieranie pliku i wczytanie zawartości
$filename = "gcal_colors.txt";
$file = fopen($filename, 'r');
$fread = fread($file, filesize($filename));

#rozbicie wszystkiego do tablicy i wyjebanie ostatniego pustego elementu
$array = explode("!", $fread);
$array2 = array_pop($array); //to działa tak, że wywala z array ostatnią pozycje i zapisuje ją w array2

echo 'Liczba elementów: ' . count($array);

echo '<pre>@';
//print_r($array);
echo '@</pre>';
echo '<hr>';
$i = 0;
foreach ($array as $key => $value) {
    
    $kolor = explode("/", $value);
    $nazwa = trim(strtolower($kolor[0]));
    $rgb = trim($kolor[1]);
    $hex = trim($kolor[2]);
    
    //echo $key . ' = <br>';
    //echo $nazwa . ' - hex => ' . $hex;
    //echo '<br>';
    //echo ".$nazwa {
    //    background-color: $hex;
    //}";

    //echo htmlspecialchars("<td class=".$nazwa.">".$nazwa."</td>");
    

    $tab = [0,4,8,12,16,20];
    $tab1 = [1,5,9,13,17,21];
    $tab2 = [2,6,10,14,18,22];
    $tab3 = [3,7,11,15,19,23];
    
    if (in_array($key, $tab3)) {
        echo htmlspecialchars("<td class=\"".$nazwa."\">".$nazwa."<br>$hex<br>$rgb</td>");
        echo '<br>';
    }

}