<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';


  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$stmt = $conn->prepare("SELECT * FROM locations WHERE city = 'Groningen'");
$stmt->execute();

while($row = $stmt->fetch()){
 $id = $row['id'];
 $name = $row['name'];
 $address = $row['address'];
 $city = $row['city'];

    echo $id ."<br>". $name ."<br>". $address ."<br>". $city;
}


?>