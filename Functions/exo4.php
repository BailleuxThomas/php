<?php


function deuxnombres($var1, $var2) {
    if ($var1 > $var2) {
        echo("Le premier nombre est plus grand <br>");
    }
    elseif($var1<$var2){
        echo ("Le premier nombre est plus petit <br>");
    }
    else{
        echo ("Les deux nombres sont identiques <br>");
    }
}

print deuxnombres(50, 50);

?>