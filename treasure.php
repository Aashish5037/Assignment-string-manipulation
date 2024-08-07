<?php

$clue ="find the hidden treasure at golden island ";
$mod= str_replace("golden","magical",$clue);
echo $mod ."<br>";
echo strtoupper($mod)."<br><br>";


$name = "gandalf,aragon,legolas";
$sep= explode(",",$name);
var_dump($sep)."<br>";
$strLower= strtolower($name);
var_dump ($strLower)."<br>";
$Rep = str_replace(",","*",$strLower);
var_dump($rep)."<br><br>";


$realSpell ="abracadabra";
$spell="   abRAAGDGbra     ";
$Trim= trim($spell," ");
$lwr= strtolower($Trim);
if($lwr==$realSpell){
    echo "you are safe";
}
else{
    echo "you are at dead";
}


?>