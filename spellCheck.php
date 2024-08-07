<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
</body>
</html>