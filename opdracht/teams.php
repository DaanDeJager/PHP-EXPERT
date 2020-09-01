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

    $sql1 = "SELECT id, naam FROM teams";
    $result1 = $conn->query($sql1);
  
      foreach($result1 as $row1) {
        echo "<tr>"."<td>".$row1['id']."</td>"."<td>".$row1['naam']."</td>"."</tr>";
    }
  

?>
</table>