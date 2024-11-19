<?php
session_start();  // Iniciar la sesión

// Si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardamos el nombre del usuario en la sesión
    $_SESSION['nombre'] = $_POST['nombre'];
    header('Location: ex2.php');  // Redirigimos a la página de bienvenida
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>

<h2>Por favor, ingresa tu nombre</h2>
<form method="post">
    <input type="text" name="nombre" required>
    <input type="submit" value="Iniciar sesión">
</form>

</body>
</html>
