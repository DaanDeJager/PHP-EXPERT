<?php
$hostdb = 'localhost';
$namedb = 'toolsforever';
$userdb = 'root';
$passdb = '';


  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);

  $sql = "SELECT firstname, lastname, email, id FROM users";
  $result = $conn->query($sql);

    foreach($result as $row) {
      echo "<h2>".$row['firstname']. " " .$row['lastname']. " </h2>" .' Email:'. $row['email'] . "<br>". "Rol:" . $row['id'] . '<br>';
    }


?>