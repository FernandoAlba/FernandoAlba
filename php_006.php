<?php 
    // define("CIUDAD", "Madrid");
    if (defined("CIUDAD")) {
        print("La ciudad es:".CIUDAD);
    } else {
        print("la constante ciudad no esta definida");
    }
?>