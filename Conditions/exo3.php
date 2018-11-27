<?php


$age = (integer) 18;
$sexehomme = (string) "homme";
$sexefemme = (string) "femme";

if($sexehomme == $sexehomme && $age <= 18){
    echo('Vous êtes bien un ' . $sexehomme . ' mais vous êtes mineur<br>');
    }
    else{
        echo('Vous etes bien un ' . $sexehomme . ' mais vous êtes majeur<br>');
    }

if($sexefemme == $sexefemme && $age <= 18){
    echo("Vous êtes bien une $sexefemme mais vous êtes mineur<br>");
}
else{
    echo("Vous êtes bien une $sexefemme mais vous êtes majeur<br>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice3</title>
</head>
<body>
    
</body>
</html>