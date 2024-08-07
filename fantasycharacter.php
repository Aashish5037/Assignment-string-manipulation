<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$name = "gandalf,aragon,legolas";
$sep= explode(",",$name);
var_dump($sep)."<br>";
$strLower= strtolower($name);
var_dump ($strLower)."<br>";
$Rep = str_replace(",","*",$strLower);
var_dump($rep)."<br><br>";
?>

</body>
</html>