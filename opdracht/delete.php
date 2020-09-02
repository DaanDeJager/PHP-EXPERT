<?php
$hostdb = 'localhost';
$namedb = 'voetbalclubASD';
$userdb = 'root';
$passdb = '';


  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
include 'db.conn.php';
$stmt = $conn->prepare("DELETE FROM users WHERE id = '$idname'");
$stmt->execute();
?>