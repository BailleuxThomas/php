<?php
if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) // On a le nom et le prénom + age
{
	echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' votre âge ' .  $_GET['age'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom , un prénom et votre age!';
}
?>