<?php
$anciennedate = "16-05-2016";
$datedujour = date("d-m-Y");
$jmoins = ((strtotime($datedujour)) - strtotime($anciennedate));
$jmoins = round($jmoins / (60*60*24)); 
echo "La différence entre les 2 dates est de $jmoins jours<br><br>";
echo "Merci<br><br> https://www.commentcamarche.net/forum/affich-25337989-calcul-nombre-de-jours-entre-deux-dates-php";
?>

