<?php
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('password', $_POST['password'], time() + 365*24*3700, null, null, false, true); // On écrit un autre cookie...



echo'<form action="user.php" method="post">
<p> Votre pseudo:
    <input type="text" name="pseudo" /><br>
    Votre password
    <input type="password" name="password" /><br>
</p>

<input action="user.php" type="submit" value="Valider" name="submit">

</form>';

?>