<?php


$departement = array(
(01)=>"Ain",
(03)=>"Allier",
(07)=>"Ardèche",
(15)=>"Cantal",
(26)=>"Drôme",
(38)=>"Isère",
(42)=>"Loire",
(43)=>"Loire",
(63)=>"Puy-de-Dôme",
(69)=>"Rhône",
(73)=>"Savoie",
(74)=>"Haute-Savoie");

$departement[57] = "Metz";
foreach ($departement as $key => $value){
echo "Le département {$value}". " a le numéro " . "{$key}<br>";
}

echo "<br>$departement[69]";



?>

