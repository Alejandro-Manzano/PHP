<?php

$color_fondo = isset($_COOKIE['color_fondo']) ? $_COOKIE['color_fondo'] : '#FFFFFF'; 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = $_POST['color'];
    setcookie('color_fondo', $color, time() + 86400); 
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar color de fondo</title>
</head>
<body style="background-color: <?php echo $color; ?>">
    
    <form method="POST">
        <select name="color" id="idioma">
            <option value="#0000FF">Azul</option>
            <option value="#008000">Verde</option>
            <option value="#FFFF00">Amarillo</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
