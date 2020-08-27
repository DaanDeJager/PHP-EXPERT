<?php
$medewerkers = [
  [
    'voornaam' => 'Willem',
    'achternaam' => 'van Oranje',
    'functie'  => 'koning'
  ],
  [
    'voornaam' => 'Donald',
    'achternaam' => 'Trump',
    'functie'  => 'president'
  ],
  [
    'voornaam' => 'Homer',
    'achternaam' => 'Simpson',
    'functie'  => 'fabrieksarbeider'
  ],
  [
    'voornaam' => 'Johan',
    'achternaam' => 'Cruyff',
    'functie'  => 'voetbalicoon'
  ]
  ,
  [
    'voornaam' => 'Badr',
    'achternaam' => 'Hari',
    'functie'  => 'Kickboxer'
  ]
];

/*  De medewerkers array heeft nu meerdere arrays. */

// echo $medewerkers[0]['voornaam'];  //'Willem'
// echo $medewerkers[$x]['voornaam']; // bij $x = 0 is de waarde 'Willem'
// echo $medewerkers[$x]['voornaam']; // bij $x = 1 is de waarde 'Donald'

//gebruik nu een foreach-loop
foreach($medewerkers as $medewerker ) {
    echo $medewerker['voornaam'] . " " .  $medewerker['achternaam'] . " is een " . $medewerker['functie'] . "<br>";
  }
?>