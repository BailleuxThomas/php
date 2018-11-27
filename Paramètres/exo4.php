<?php
if (isset($_GET['langage']) AND isset($_GET['serveur'])) // On a le nom et le prénom + age
{
	echo 'Bonjour vous utilisez ' . $_GET['langage'] . ' avec un serveur ' . $_GET['serveur'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un format PHP , un serveur LAMP!';
}
?>