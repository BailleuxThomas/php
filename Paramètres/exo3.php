<?php
if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) // On a le nom et le prénom + age
{
	echo 'Bonjour nous sommes le ' . $_GET['dateDebut'] . ' ' . $_GET['dateFin'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner une date de début , une date de fin!';
}
?>