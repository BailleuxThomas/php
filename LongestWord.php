<?php
function LongestWord($send = "Je veux une tassééé BECODE BORDEL DE MERDE !!!!!! THOMAS DAVID KEVIN CORENTIN MAXIMERE EDOUART") {
$max_longueur="0";
$array = explode(" ", $send);
$nb_mots = count($array);
for($i = 0; $i < $nb_mots; $i++) {
$longueur= strlen($array[$i]);
if($max_longueur<$longueur) {
$max_longueur=$longueur;
$le_mot=$array[$i];
}
}
echo strlen("é");
echo"$le_mot";
}
echo LongestWord();

?>