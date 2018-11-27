<!-- Exercice 6
C'est les soldes. Un t-shirt qui te plaît coûte 785€ à la base mais ce mois-ci, 
ton magasin préféré lui applique une ristourne de 30%. Grâce à tes nouvelles connaissances en PHP, 
affiche le prix de départ, le montant de la ristourne et le prix que tu vas payer sur ton navigateur. -->



<?php

$prixdebase = 785;
$pourcent = 785/100*30;
$prix2 = $prixdebase-$pourcent;
$calcule = $prixdebase/$pourcent;

echo("Le prix de notre T-shirt est de $prix2 €<br>DEPECHEZ-VOUS car avant il coutait $prixdebase €")



?>