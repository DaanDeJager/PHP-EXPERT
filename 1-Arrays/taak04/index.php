<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];
// $speelgoed = array (
//     array("Bal","sport","5.00"),
//     array("knuffelbeer","knuffels","9,50"),
//     array("Catan","bordspel","39.00"),
//   );


$games = [
    'sport'=>[
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'Actie'=>[
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps'=>[
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];
echo "Speelgoed " . $speelgoed[0]["naam"]." uit de categorie ".$speelgoed[0]["soort"]." kost ".$speelgoed[0]["prijs"].".<br>";
echo "Speelgoed " . $speelgoed[1]["naam"]." uit de categorie ".$speelgoed[1]["soort"]." kost ".$speelgoed[1]["prijs"].".<br>";
echo "Speelgoed " . $speelgoed[2]["naam"]." uit de categorie ".$speelgoed[2]["soort"]." kost ".$speelgoed[2]["prijs"].".<br>";
echo "Speelgoed " . $games['sport']['naam']." van de uitgever ".$games['sport']["uitgever"]." kost ".$games['sport']["prijs"].".<br>";
echo "Speelgoed " . $games["Actie"]["naam"]." van de uitgever ".$games["Actie"]["uitgever"]." kost ".$games["Actie"]["prijs"].".<br>";
echo "Speelgoed " . $games['fps']["naam"]." van de uitgever ".$games['fps']["uitgever"]." kost ".$games["fps"]["prijs"].".<br>";

?>