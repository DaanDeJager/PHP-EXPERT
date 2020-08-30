<?php
class robot{
    public $naam;
    public $geluid;
    public $voorstuwing;
    function setSound($sound){ 
        $this->sound = $sound;
    }

    function getSound(){
        return $this->sound . "<br>";
    }
}

$wally = new robot();
$wolly = new robot();
$wally->naam = ("wal-e");
$wolly->naam = ("wol-e");
$wally->geluid = ("beepboop");
$wolly->geluid = ("boopbeep");
$wally->voorstuwing = ("rollend");
$wolly->voorstuwing = ("lopend");
$wally->setSound("beepboop");
$wolly->setSound("boopbeep");
echo $wally->getSound(); 
echo $wolly->getSound(); 
?>