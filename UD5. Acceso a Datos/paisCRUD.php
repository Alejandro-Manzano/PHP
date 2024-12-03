<?php

    declare (strict_types=1);
    include_once "db.php";
    include_once "pais.php";

 function listarPaises(): array{

    $conexion = crearConexion();

    $consulta = "SELECT * FROM `pais`";
    $listaPaises = mysqli_query($conexion, $consulta);

    $paises = [];
    if ($listaPaises) {

        foreach ($listaPaises as $pais) {
            $p = new Pais($pais['idpais'], $pais['nombre']);
            $paises[] = $p;   
        }
    } 
    $conexion->close();
    return $paises;

 }

?>