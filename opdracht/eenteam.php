
<?php
include "conn.php";
include "teams.php";


echo "<br>";
$uid = ($_GET['subject']);

$stmt = $conn->prepare("SELECT * FROM teams WHERE id = '$uid'");

$stmt->execute();
while($row = $stmt->fetch()){
    $name = $row['naam'];
    $id = $row['id'];


    echo "<form name='form' method='get'>";
    echo "id:"."<input type='number' name='subject' id='subject' value='$id'>"."<br>";
    echo  "Naam:"."<input type='text' name='subject1' id='subject1' value='$name'>". "<br>";
    echo " <input type='submit'>";
}

$uid = ($_GET['subject']);
$name = ($_GET['subject1']);

$stmt0 = $conn->prepare("UPDATE teams SET naam = '$name' WHERE id = '$uid'");



$stmt0->execute();


?>

