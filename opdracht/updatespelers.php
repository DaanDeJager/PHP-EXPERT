
<form name="form" action="" method="post">
  Speler ID:<input type="number" name="subject" id="subject"><br>
  Voornaam :<input type="text" name="subject1" id="subject1"><br>
  Achternaam :<input type="text" name="subject2" id="subject2"><br>
  Email :<input type="text" name="subject3" id="subject3"><br>
  Wachtwoord :<input type="text" name="subject4" id="subject4"><br>
  Team :<input type="text" name="subject5" id="subject5"><br>
  Contributie :<input type="text" name="subject6" id="subject6"><br>
  <input type="submit">
</form><br>
<?php
$uid = ($_POST['subject']);
$ufirstname = ($_POST['subject1']);
$ulastname = ($_POST['subject2']);
$uemail = ($_POST['subject3']);
$uwachtwoord = ($_POST['subject4']);
$uteam = ($_POST['subject5']);
$ucontributie = ($_POST['subject6']);
$hostdb = 'localhost';
$namedb = 'voetbalclubASD';
$userdb = 'root';
$passdb = '';


$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$stmt = $conn->prepare("UPDATE users SET firstname = '$ufirstname' WHERE id = '$uid'");
$stmt1 = $conn->prepare("UPDATE users SET lastname = '$ulastname' WHERE id = '$uid'");
$stmt2 = $conn->prepare("UPDATE users SET email = '$uemail' WHERE id = '$uid'");
$stmt3 = $conn->prepare("UPDATE users SET wachtwoord = '$uwachtwoord' WHERE id = '$uid'");
$stmt4 = $conn->prepare("UPDATE users SET team = '$uteam' WHERE id = '$uid'");
$stmt5 = $conn->prepare("UPDATE users SET contributie = '$ucontributie' WHERE id = '$uid'");

$stmt->execute();
$stmt1->execute();
$stmt2->execute();
$stmt3->execute();
$stmt4->execute();
$stmt5->execute();



?>