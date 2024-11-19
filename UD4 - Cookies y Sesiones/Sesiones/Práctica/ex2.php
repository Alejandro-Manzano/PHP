<?php
session_start();  // Iniciar la sesión

// Verificamos si el nombre está almacenado en la sesión
if (isset($_SESSION['nombre'])) {
    echo "<h1>¡Bienvenido, " . $_SESSION['nombre'] . "!</h1>";
    echo "<a href='ex3.php'>Cerrar sesión</a>";
} else {
    echo "<h1>No has iniciado sesión.</h1>";
    echo "<a href='login.php'>Iniciar sesión</a>";
}
?>
