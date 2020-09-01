<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';

$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$firstName = $_POST['form_firstname'];
$lastName = $_POST['form_lastname'];

$sql = "INSERT INTO users (firstname, lastname) VALUES (:ph_lastname, :ph_lastname)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":ph_firstname", $firstname);
$stmt->bindParam(":ph_lastname", $lastname);
$stmt->execute();
?>

<form method="post" action="create.php">
  firstname: <input type="text" name="form_firstname">
  lastname: <input type="text" name="form_lastname">
  <input type="submit">
</form>
