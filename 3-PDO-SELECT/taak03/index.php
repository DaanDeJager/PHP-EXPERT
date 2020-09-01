<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';


  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$stmt = $conn->prepare("SELECT * FROM users WHERE firstname = 'Mohamed'");
$stmt->execute();

while($row = $stmt->fetch()){
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $id = $row['id'];
    $pw = $row['password'];

    echo $firstname ." ". $lastname ."<br>". $email ."<br>". $id . "<br>". $pw;
}


?>