<?php
$mois = [
"Janvier",
"Février",
"Mars",
"Avril",
"Mai",
"Juin",
"Juillet",
"Août",
"Septembre",
"Octobre",
"Novembre",
"Decembre"];

$annee = [
"2018",
"2019",
];

echo '<form method="post" action="">';
echo '<select name="value" size="1">';
foreach ($mois as $value) {
    echo "<option>".$value."</option>";
}
echo "</select>";

echo '<form method="post" action="">';
echo '<select name="value2" size="1">';
foreach ($annee as $value) {
    echo "<option>".$value."</option>";
}
echo "</select>";
?>