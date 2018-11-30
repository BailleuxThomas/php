<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    
<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre Nom ainsi que votre Prénom :
</p>

<form action="user.php" method="POST">
<p> Votre nom:
    <input type="text" name="nom" /><br>
    Votre prenom
    <input type="text" name="prenom" /><br>
    <input type="submit" value="Valider" />
</p>
</form>
</body>
</html>