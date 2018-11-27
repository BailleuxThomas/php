
Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut :

l'afficher
l'incrementer de la moitié de sa valeur


<?php
$var = (integer) 1;

while($var < 10){
    echo $var.'<br>';
    $var=$var+1/2;
}

?>