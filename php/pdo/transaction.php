<?php

//require_once 'connect.php';

try {
	$db->beginTransaction(); //rozpoczęcie transakcji

	//początek bloku
	$query1 = '';  
	$stmt1 = $db->prepare($query1);

	$query2 = '';  
	$stmt2 = $db->prepare($query2);

	$stmt1->execute();

	$stmt1Id = (int)$db->lastInsertId();

	$stmt2->execute($stmt1Id);
	//koniec bloku

	$db->commit();
} catch(\Throwable $e) {
	if ($db->inTransaction()) { //sprawdzenie czy nie jest już rozpoczęta inna transakcja
		$db->rollBack(); //odwrócenie transakcji
	}
}