<?php

require_once 'connect.php';

//zapytanie
$query = 'SELECT * FROM guestbook';
$stmt = $db->query($query);

//wyświetlenie wyników w tablicy
echo $stmt->rowCount() . '</br>';
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['message'], 'a<br>';
}
echo '</br></br>';

//wyświetlenie wyników jako obiekt
$stmt = $db->query($query);

while ($r = $stmt->fetch()) {
    echo $r->message, 'b</br>';
}


echo '</br></br>';
//wyświetlenie wszystkich wyników

$query = $db->query($query);
$stmt = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($stmt);
echo '</pre>'
?>

<?php
echo '</br></br>';
//zapytanie z prepare z neta

/* Delete all rows from the FRUIT table */
$query = "SELECT * FROM guestbook";
$query = $db->prepare($query);
$query->execute();

$count = $query->rowCount();
print("Deleted $count rows.\n");
?>
