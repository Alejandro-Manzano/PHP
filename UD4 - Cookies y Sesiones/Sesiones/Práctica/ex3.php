<?php
session_start();  // Iniciar la sesión

// Destruimos todas las variables de sesión
session_unset();

// Destruimos la sesión
session_destroy();

// Redirigimos a la página de inicio de sesión
header('Location: login.php');
exit();
?>
