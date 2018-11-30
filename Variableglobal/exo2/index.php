<?php
session_start();

$_SESSION['nom']="bailleux";
$_SESSION['prenom']="thomas";
$_SESSION['age']="26";

echo '<form action="user.php" method="post" enctype="multipart/form-data">
        <br><input type="submit" value="Valider" name="submit"/>
    </form>';

?>