<?php
//print_r(PDO::getAvailableDrivers());//sprawdzenie dostępnych systemów baz

//połączenie
try {
    $db = new PDO('mysql:host=localhost;dbname=mvc-oop','root','root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$db->exec("SET NAMES 'utf8'");

} catch(PDOException $e) {
    echo $e->getMessage();
}