<?php
class scooter{
    public $kleur;
    public $merk;
    public $inhoudTank;
    function checkGas(){
        if($inhoudTank == 0){
            echo "de tank is leeg";
        }
    }
}
$piago = new scooter;
$peugeot = new scooter;
$piago->$merk = ('piago');
$piago->$kleur = ('rood');
$piago->$inhoudTank = (6);
$peugeot->$merk = ('peugeot');
$peugeot->$kleur = ('zwart');
$peugeot->$inhoudTank = (7);
?>