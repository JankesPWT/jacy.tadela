<?php

require_once 'connect.php';

$data = '';

$query = 'SELECT * FROM users WHERE email = ?';
$stmt = $db->prepare($query);

$stmt->execute([$data]);

//////////
$username = 'Jacek';
$email = 'xxx@yyy.zz';

$query = 'INSERT INTO users (username, email, created_at)
		  VALUES (?, ?, NOW())';
		  
$stmt = $db->prepare($query);

$stmt->execute([$username, $email]);

////////// NAMED PARAMETERS
$username = 'Agatka';
$email = 'zzz@yyy.xx';

$query = 'INSERT INTO users (username, email, created_at)
		  VALUES (:username, :email, NOW())';
		  
$stmt = $db->prepare($query);

$stmt->execute(
	[
		'username'=>$username, 
		'email'=>$email
	]
);

////////// BINDING
$username = 'Jaś';
$email = 'yyy@xxx.zz';

$query = 'INSERT INTO users (username, email, created_at)
		  VALUES (:username, :email, NOW())';
		  
$stmt = $db->prepare($query);

$stmt->bindValue(':username', $username);
$stmt->bindValue(':email', $email); //zadziała bez dwukropka
//$stmt->bindValue('int', $int, PDO::PARAM_INT);

//$stmt->bindParam('username', $username); //można zmienić wartość póżniej

$stmt->execute();