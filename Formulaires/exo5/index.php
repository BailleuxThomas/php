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

<?php

if(!empty($_POST['nom']) or !empty($_POST['prenom']) or !empty($_POST['choix'])){
    echo("Bonjour !");
    echo("Je sais comment tu t'appelles, hé hé. Tu t'appelles " . " " . $_POST['nom']. " " .$_POST['prenom']. " " . $_POST['choix'] .  "!");
}else {
    echo '<form method="post" action="">';
    echo '<select name="choix" size="1">';
    echo '<option>Monsieur</option>';
    echo '<option>Madame</option>';
    echo '</select>';
    echo '<input type="text" name="nom" />';
    echo '<input type="text" name="prenom" />';
    echo '<input type="submit" value="Valider" />';
    
        echo    '</form>';
        echo '<form action="" method="post" enctype="multipart/form-data">
        Selectionnez une image à upload : 
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>';
}

?>
</form>
</body>
</html>