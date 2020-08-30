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
$woonkamerLamp->setStatus("true");
$keukenLamp->setStatus("false");
echo $woonkamerLamp->status;
echo $keukenLamp->status;
?>