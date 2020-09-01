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

<?php
$naam = $_GET['subject'];
$hostdb = 'localhost';
$namedb = 'voetbalclubASD';
$userdb = 'root';
$passdb = '';


  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

  $sql = $conn->prepare("SELECT * FROM users WHERE id = ?");
  $sql->bindValue(1, $naam);
  
  while($row = $sql->fetch()){
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $id = $row['id'];
    $pw = $row['password'];

    echo $id;
  }
?>
</table>

<form name="form" action="" method="GET">
  Speler ID:<input type="text" name="subject" id="subject">
  <input type="submit">
</form>