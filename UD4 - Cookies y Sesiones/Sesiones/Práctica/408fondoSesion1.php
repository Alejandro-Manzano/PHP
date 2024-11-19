<?php

    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['c1']) && !empty($_POST['c1'])) {
        $color = $_POST["c1"];
        $_SESSION["color"] = $color;
    } else{
        $color = isset($_SESSION['color']) ? $_SESSION['color'] : "white";
    }
     
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colores</title>
</head>

<body style="background-color: <?php echo $color; ?>">
    <form method="post">
        <select name="c1">
            <option></option>
            <option value="blue">Blue</option>
            <option value="yellow">Amarillo</option>
            <option value="green">Verde</option>
        </select>
        <button type="submit">Cambiar</button>
    </form>
    <a href="408fondoSesion2.php">Fondo sesiones 2</a>
</body>

</html>