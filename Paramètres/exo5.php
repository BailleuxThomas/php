<?php
if (isset($_GET['semaine'])) // On a le nom et le prénom + age
{
	echo 'Bonjour nous sommes la semaine ' . $_GET['semaine'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner une semaine!';
}
?>