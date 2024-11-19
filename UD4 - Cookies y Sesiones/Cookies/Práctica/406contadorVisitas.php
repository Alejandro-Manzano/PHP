<?php

    $cookie_name = "visitas";

    if (isset($_GET["reiniciar"])) {
        setcookie($cookie_name, " ", time()-3600);
        echo "Se ha reiniciado la cookie";
        exit();
    } 

    if (isset($_COOKIE[$cookie_name])) {
        $contador = $_COOKIE[$cookie_name]+1;
        echo "Has visitado la página ". $_COOKIE[$cookie_name]. " veces";
    } else{
        echo "Hola, es tu primera visita";
        $contador = 1;
    }

    setcookie($cookie_name, $contador, time()+3600);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>406 - Contador</title>
</head>
<body>
        <br>
        <a href="?reiniciar=true">Reiniciar contador</a>
        
</body>
</html>