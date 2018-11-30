<?php
$date_debut = '30-11-2018';
$date_fin = date('d-m-Y', strtotime($date_debut.' +20 days'));

echo "Date de début: $date_debut"; 
echo "<br>";
echo "Date de fin + 20 jours: $date_fin";


?>