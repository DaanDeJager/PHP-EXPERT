
<?php
include "conn.php";
include "home.php";


echo "<br>";
$uid = ($_GET['subject']);

$stmt = $conn->prepare("SELECT * FROM users WHERE id = '$uid'");

$stmt->execute();
while($row = $stmt->fetch()){
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $id = $row['id'];
    $pw = $row['wachtwoord'];
    $team = $row['team'];
    $contri = $row['contributie'];

    echo "<form name='form' method='get'>";
    echo "id:"."<input type='number' name='subject' id='subject' value='$id'>"."<br>";
    echo  "Voornaam:"."<input type='text' name='subject1' id='subject1' value='$firstname'>". "<br>";
    echo  "Achternaam:"."<input type='text' name='subject2' id='subject2' value='$lastname'>". "<br>";
    echo  "Email:"."<input type='text' name='subject3' id='subject3' value='$email'>". "<br>";
    echo  "Password:"."<input type='text' name='subject4' id='subject4' value='$pw'>". "<br>";
    echo  "Team"."<input type='text' name='subject5' id='subject5' value='$team'>". "<br>";
    echo  "Contribution"."<input type='text' name='subject6' id='subject6' value='$contri'>". "<br>";
    echo " <input type='submit'>";
}

$uid = ($_GET['subject']);
$ufirstname = ($_GET['subject1']);
$ulastname = ($_GET['subject2']);
$uemail = ($_GET['subject3']);
$uwachtwoord = ($_GET['subject4']);
$uteam = ($_GET['subject5']);
$ucontributie = ($_GET['subject6']);

$stmt0 = $conn->prepare("UPDATE users SET firstname = '$ufirstname' WHERE id = '$uid'");
$stmt1 = $conn->prepare("UPDATE users SET lastname = '$ulastname' WHERE id = '$uid'");
$stmt2 = $conn->prepare("UPDATE users SET email = '$uemail' WHERE id = '$uid'");
$stmt3 = $conn->prepare("UPDATE users SET wachtwoord = '$uwachtwoord' WHERE id = '$uid'");
$stmt4 = $conn->prepare("UPDATE users SET team = '$uteam' WHERE id = '$uid'");
$stmt5 = $conn->prepare("UPDATE users SET contributie = '$ucontributie' WHERE id = '$uid'");

$stmt0->execute();
$stmt1->execute();
$stmt2->execute();
$stmt3->execute();
$stmt4->execute();
$stmt5->execute();
?>



