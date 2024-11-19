<?php

    /* setcookie("Usuario", "Juan", time()+10);

    if (isset($_COOKIE["Usuario"])) {
        echo "Hola ". $_COOKIE["Usuario"];
    } else {
        echo "No hay";
    } */

    
    

    

if (isset($_COOKIE['visitas'])) {
    $visitas = $_COOKIE['visitas'] + 1;
} else {
    $visitas = 1;
}

setcookie("visitas", $visitas, time() + 15); 
echo "Has visitado esta página " . $visitas . " veces.";

// Guardar la nueva cantidad de visitas en la cookie




?>