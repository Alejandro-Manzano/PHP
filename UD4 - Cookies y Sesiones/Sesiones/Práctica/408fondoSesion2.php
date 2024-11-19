<?php
    session_start();

    // Mostrar el valor de la sesión si existe
    if (isset($_SESSION["color"])) {
        echo $_SESSION["color"];
    } else {
        echo "No hay color";
    }
?>
<!-- Enlace para vaciar la sesión -->
<a href="destroy.php">Vaciar sesión</a>