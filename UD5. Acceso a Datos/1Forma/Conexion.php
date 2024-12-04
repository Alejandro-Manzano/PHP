<?php

    $servidor = "localhost:3306";
    $usuario = "root";
    $password= "";
    $database = "2daw";
    $conexion = mysqli_connect($servidor,$usuario,$password,$database);

    if (mysqli_connect_errno()) {
        echo "Ha fallado la conexion: ". mysqli_connect_error();
        exit();
    }

    echo "<h1>Bienvenido a MYSql</h1>";


    //Consulta a pasajero
    $consulta = "SELECT * FROM `pasajero`";
    $listaPasajeros = mysqli_query($conexion, $consulta);

    if ($listaPasajeros) {
    echo "<h2>Datos pasajero</h2>"; 
        foreach ($listaPasajeros as $pasajero) {
            echo "Id: {$pasajero['idpasajero']}<br>";
            echo "Nombre: {$pasajero['nombre']}<br>";
            echo "Apellido paterno: {$pasajero['apaterno']}";
        }

    }

    $consulta2 = "SELECT * FROM `vuelo`";
    $listaVuelos = mysqli_query($conexion, $consulta2);

    if ($listaVuelos) {
        echo "<h2>Datos vuelos</h2>"; 
            foreach ($listaVuelos as $vuelo) {
                echo "Id: {$vuelo['idvuelo']}<br>";
                echo "Plazas: {$vuelo['n_plazas']}<br>";
                echo "Disponible?: {$vuelo['disponible']}<br>";
                echo "Pais: {$vuelo['idpais']}<br>";
            }
    }

   $consulta3 = "SELECT * FROM `pais`";
    $listaPaises = mysqli_query($conexion, $consulta3);

    if ($listaPaises) {
        echo "<h2>Datos paises:</h2>"; 
            foreach ($listaPaises as $pais) {
                echo "Id: {$pais['idpais']}<br>";
                echo "Nombre: {$pais['nombre']}<br>";
            }
    } 

?>