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
<a href="home.php">Alle Leden</a>
<a href="teams.php">Alle Teams</a>
<table>

<?php
include "conn.php";
    $sql1 = "SELECT id, naam FROM teams";
    $result1 = $conn->query($sql1);
  
      foreach($result1 as $row1) {
        $idname = $row1['id'];
        echo "<tr>"."<td> ID: ".$row1['id']."</td>"."<td> Naam: ".$row1['naam']."</td><td>"."<a href='deleteteam.php?subject=$idname'>delete row</a>"."<br>"."</td>"."</td><td>"."<a href='eenteam.php?subject=$idname'>inspect row</a>"."<br>"."</td>"."</tr>";
    }
  

?>
</table>