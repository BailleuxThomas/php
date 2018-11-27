<?php


function agegenre($age,$genre){
    if($genre === "homme" and $age >= 18){
        echo("Vous êtes un homme et vous êtes majeur");
    }
    else if($genre === "homme" and $age < 18){
        echo("Vous êtes un homme et vous êtes mineur");
    }
    else if($genre === "femme" and $age >= 18){
        echo("Vous êtes une femme et vous êtes majeur");
    }
    else if($genre === "femme" and $age < 18){
        echo("Vous êtes une femme et vous êtes mineur");
    }
}

echo agegenre(17,homme);
?>