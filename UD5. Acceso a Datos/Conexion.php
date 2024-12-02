<?php

    $servidor = "localhost:3306";
    $usuario = "root";
    $password= "";
    $database = "2daw";
    $conexion = mysqli_connect($servidor,$usuario,$password,$database);

    if (mysqli_connect_errno()) {
        echo "Ha fallado la conexion: ". mysqli_connect_error();
    }

    echo "<h1>Bienvenido a MYSql</h1>";

?>