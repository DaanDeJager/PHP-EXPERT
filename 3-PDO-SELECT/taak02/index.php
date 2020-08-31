<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';


  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

  $sql = "SELECT name, address, city FROM locations";
  $result = $conn->query($sql);

    foreach($result as $row) {
      echo "<h2>" . $row['name'] . "</h2>" . "Adres:". $row['address']."<br> Stad:".$row['city'].'<br>';
    }


?>