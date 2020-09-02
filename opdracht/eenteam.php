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
  Team ID:<input type="text" name="subject" id="subject">
  <input type="submit">
</form><br>
<?php
$uid = ($_POST['subject']);
$hostdb = 'localhost';
$namedb = 'voetbalclubASD';
$userdb = 'root';
$passdb = '';


$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

$stmt = $conn->prepare("SELECT * FROM teams WHERE id = '$uid'");
$stmt->execute();

while($row = $stmt->fetch()){
    $id = $row['id'];
    $naam = $row['naam'];

    echo "ID: " .$id ."<br>". "Naam: ".$naam ."<br>". "<a href='updateteam.php'>Update Info</a>";
}


?>