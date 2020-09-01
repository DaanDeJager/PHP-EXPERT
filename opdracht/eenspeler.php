<style>
*{
    font-family: arial;
}
li{
    list-style: none;
}

</style>
<li>
<ul>
<a href="db.conn.php">Alle Leden</a>
<a href="teams.php">Alle Teams</a>
<a href="eenspeler.php">Zoek één speler</a>
<a href="eenteam.php">Zoek één team</a>
</ul>
</li>
<table>
<form name="form" action="" method="post">
  Speler ID:<input type="text" name="subject" id="subject">
  <input type="submit">
</form><br>
<?php
$uid = ($_POST['subject']);
$hostdb = 'localhost';
$namedb = 'voetbalclubASD';
$userdb = 'root';
$passdb = '';


$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$stmt = $conn->prepare("SELECT * FROM users WHERE id = '$uid'");
$stmt->execute();

while($row = $stmt->fetch()){
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $id = $row['id'];
    $pw = $row['wachtwoord'];
    $team = $row['team'];
    $contri = $row['contributie'];

    echo "ID: " . $id . "<br>";
    echo "Volledige Naam: " . $firstname . " " . $lastname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $pw . "<br>";
    echo "Team ID: " . $team . "<br>";
    echo "Contributie: " . $contri . "<br>";
}


?>