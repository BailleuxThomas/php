<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user.php</title>
</head>
<body>
<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_GET['nom']. " " .$_GET['prenom']. " " .$_GET['choix']; ?> !</p>

<p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page formulaire.php.</p>

</body>
</html>