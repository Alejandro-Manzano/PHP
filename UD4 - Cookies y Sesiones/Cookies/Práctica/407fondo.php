<!-- 407fondo.php: Mediante el uso de cookies, crea una página con un desplegable con
varios colores, de manera que el usuario pueda cambiar el color de fondo de la página
(atributo bgcolor). Al cerrar la página, ésta debe recordar, al menos durante 24h, el
color elegido y la próxima vez que se cargue la página, lo haga con el último color
seleccionado. -->

<?php

    isset($_COOKIE["color"])? $color = $_COOKIE["color"]: $color = "white";

    if (isset($_GET["color"])) {
        $color = $_GET["color"];
        setcookie("color", $color, time()+3600);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar bg Color</title>
</head>
<body style="background-color: <?php echo $color;?>">
    
    <form method="get">
        <select name="color">
            <option value="blue">-------</option>
            <option value="blue">Azul</option>
            <option value="yellow">Amarillo</option>
            <option value="green">Verde</option>
        </select>
        <button type="submit">Cambiar</button>
    </form>

</body>
</html>