<?php
$hostdb = 'localhost';
$namedb = 'voetbalclubASD';
$userdb = 'root';
$passdb = '';


$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
?>