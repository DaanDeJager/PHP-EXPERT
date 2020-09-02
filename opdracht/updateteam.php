
<form name="form" action="" method="post">
  Team ID:<input type="number" name="subject" id="subject"><br>
  Naam :<input type="text" name="subject1" id="subject1"><br>
  <input type="submit">
</form><br>
<?php
$uid = ($_POST['subject']);
$uname = ($_POST['subject1']);
$hostdb = 'localhost';
$namedb = 'voetbalclubASD';
$userdb = 'root';
$passdb = '';


$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$stmt = $conn->prepare("UPDATE teams SET naam = '$uname' WHERE id = '$uid'");


$stmt->execute();




?>