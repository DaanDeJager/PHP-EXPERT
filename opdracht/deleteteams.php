<?php
include "conn.php";
include "home.php";
$uid = ($_GET['subject']);

$stmt = $conn->prepare("DELETE FROM teams WHERE id = '$uid'");

$stmt->execute();
?>