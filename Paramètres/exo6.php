<?php
if (isset($_GET['batiment']) AND isset($_GET['salle'])) // On a le nom et le prénom + age
{
	echo 'Bonjour voici le nombre de ' . $_GET['batiment'] . ' ainsi que le nombre de ' . $_GET['salle'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo "Il faut renseigner un nombre de batiment ainsi qu'un nombre de salle";
}
?>