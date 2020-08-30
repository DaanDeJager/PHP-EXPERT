<?php
class lamp{
    public $kleur;
    public $helderheid;
    public $isAan;
    function setStatus($status){
        $this->status = $status;
    }
}
$woonkamerLamp = new lamp();
$keukenLamp = new lamp();
$woonkamerLamp->kleur = ("geel");
$keukenLamp->kleur = ("wit");
$woonkamerLamp->helderheid = ("zacht");
$keukenLamp->helderheid= ("vel");
$woonkamerLamp->isAan = ("true");
$keukenLamp->isAan = ("false");
$woonkamerLamp->setStatus("true");
$keukenLamp->setStatus("false");
echo $woonkamerLamp->status;
echo $keukenLamp->status;
?>