<?php

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

setcookie("usuario", "", time() - 86400);

?>