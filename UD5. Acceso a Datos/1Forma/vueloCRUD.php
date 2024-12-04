<?php

    declare (strict_types=1);
    include_once "db.php";
    include_once "vuelo.php";

 function listarVuelos(): array{

    $conexion = crearConexion();

    $consulta = "SELECT * FROM `vuelo`";
    $listarVuelos = mysqli_query($conexion, $consulta);

    $vuelos = [];
    if ($listarVuelos) {

        foreach ($listarVuelos as $vuelo) {
            $v = new Vuelo(
                (int)$vuelo['idvuelo'], 
                (int)$vuelo['nplazas'],
                (bool)$vuelo['disponible'],
                (int)$vuelo['idpais'],
              
            );
            
            $vuelos[] = $v;   
        }
    } 
    $conexion->close();
    return $vuelos;

 }

?>