<style>
*{
    font-family: arial;
}
table,tr,td{
    border: solid black 1px;
    border-collapse: collapse;
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
$hostdb = 'localhost';
$namedb = 'voetbalclubASD';
$userdb = 'root';
$passdb = '';


  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

  $sql = "SELECT id, firstname, lastname, email, wachtwoord, team, contributie FROM users";
  $result = $conn->query($sql);
    foreach($result as $row){
      echo "<tr>". "<td>".$row['id'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['email']. "<br>"."</td>"."</tr>";
    }
?>
</table>