<?php

$data = new DateTime('31-12-2010');
$data2 = new DateTime('15-05-2015');

$interval = $data->diff($data2);
echo $interval->days;

echo '<pre>';
var_dump($interval);
echo'</pre>';

// echo '<pre>';
// var_dump($data);
// echo'</pre>';

// echo strtotime("now");

// $sunInfo = date_sun_info(strtotime("2022-11-09"), 54.37, 18.63);

// foreach ($sunInfo as $key => $val) {
//     echo "$key: " . date("H:i:s", $val) . "\n";
// }