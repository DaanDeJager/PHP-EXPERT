<?php
class scooter{
    public $kleur;
    public $merk;
    public $inhoudTank;
    function checkInhoud(){ 
        if($this->inhoud == 100){
            echo 'De tank is vol!' ."<br>";
            }
        else{
            echo 'de tank is niet vol' ."<br>";
        }
    }
}
$piago = new scooter();
$peugeot = new scooter();
$piago->$merk = ('piago');
$piago->$kleur = ('rood');
$piago->$inhoudTank = (6);
$piago->checkInhoud();
$peugeot->$merk = ('peugeot');
$peugeot->$kleur = ('zwart');
$peugeot->$inhoudTank = (7);
$peugeot->checkInhoud()
?>