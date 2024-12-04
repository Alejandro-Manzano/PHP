<?php

    declare (strict_types=1);
    include_once "db.php";
    include_once "pasajero.php";

 function listarPasajeros(): array{

    $conexion = crearConexion();

    $consulta = "SELECT * FROM `pasajero`";
    $listaPasajeros = mysqli_query($conexion, $consulta);

    $pasajeros = [];
    if ($listaPasajeros) {

        foreach ($listaPasajeros as $pasajero) {
            $p = new Pasajero(
                (int)$pasajero['idpasajero'], 
                $pasajero['nombre'],
                $pasajero['apaterno'],
                $pasajero['amaterno'],
                $pasajero['idpais'], 
                $pasajero['telefono'],
                $pasajero['email'],
                $pasajero['idvuelo'] 
            );
            
            $pasajeros[] = $p;   
        }
    } 
    $conexion->close();
    return $pasajeros;

 }

?>