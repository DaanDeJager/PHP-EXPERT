<?php
$hostdb = 'localhost';
$namedb = 'voetbalclubASD';
$userdb = 'root';
$passdb = '';


  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
include 'teams.php';
$stmt = $conn->prepare("DELETE FROM teams WHERE id = '$idname'");
$stmt->execute();
?>