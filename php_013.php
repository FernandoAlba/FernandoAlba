<?php
    //unset: Elimina una variable o array respetando el ambito de dicha variable.
    $var1 = 4;
    if (isset($var1)) {
        print("La variable var1 esta configurada y vale = ".$var1);
    } else {
        print("La variavle var1 no esta configurada");
    }

    unset($var1);
    echo "<br>";

    if (isset($var1)) {
        print("La variable var1 esta configurada y vale = ".$var1);
    } else {
        print("La variavle var1 no esta configurada");
    }
?>