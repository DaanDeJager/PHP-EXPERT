<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';


  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

  $sql = "SELECT id FROM users";
  $result = $conn->query($sql);

    foreach($result as $row) {
      echo $row['id'].'<br>';
    }


?>