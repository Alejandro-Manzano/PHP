<?php

    //En PHP, se utilizan principalmente dos funciones para trabajar con cookies:
    //setcookie(): Para crear o modificar una cookie.
    //$_COOKIE: Para leer el valor de una cookie existente.

    //Para crear una cookie en PHP, se usa la función setcookie().
    //setcookie("nombre", "Juan", time() + 3600); // Expira en 1 hora
    //setcookie(nombre, valor, expiracion, ruta, dominio, seguro, httponly);

    // Crear una cookie llamada "usuario" con valor "Carlos", válida por 1 día
    setcookie("usuario", "Carlos", time() + 86400);

    // Verificar si la cookie está configurada
    if (isset($_COOKIE["usuario"])) {
        echo "Hola, " . $_COOKIE["usuario"];
        } else {
    echo "Bienvenido, nuevo usuario";
    }

    setcookie("usuario", "Leyre");

    if (isset($_COOKIE["usuario"])) {
        echo "<br>". $_COOKIE["usuario"];
    }

?>