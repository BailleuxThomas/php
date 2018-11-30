<?php
setcookie();

$prenom = $_POST['prenom'];
$age = $_POST['age'];

setcookie('prenom', $prenom, time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('age', $age, time() + 365*24*3700, null, null, false, true); // On écrit un autre cookie...



echo'<form method="post">
<p> Votre prénom:
    <input type="text" name="prenom" /><br>
    Votre age:
    <input type="text" name="age" /><br>
</p>

<input type="submit" value="Enregistrer les cookies" name="submit">

</form>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="user.php">AFFICHE COOKIE</a>
</body>
</html>