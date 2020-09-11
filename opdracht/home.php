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
  $sql = "SELECT id, firstname, lastname, email, wachtwoord, team, contributie FROM users";
  $result = $conn->query($sql);
  function delete(){
    $stmt->execute();
  }
    foreach($result as $rows){
        $idname = $rows['id'];
      echo "<tr>". "<td> ID: ".$rows['id'] . "</td><td>voornaam: " . $rows['firstname'] . "</td><td> achternaam: " . $rows['lastname'] . "</td><td> email: " . $rows['email'] ."</td><td>"."<a href='delete.php?subject=$idname'>delete row</a>"."<br>"."</td>"."</td><td>"."<a href='eenspeler.php?subject=$idname'>inspect row</a>"."<br>"."</td>"."</tr>";
    }
?>
</table>
<?php

?>