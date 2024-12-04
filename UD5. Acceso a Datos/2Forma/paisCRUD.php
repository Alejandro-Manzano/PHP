<?php
    declare(strict_types=1);
    include_once "db.php";
    include_once "pais.php";

    function listarPaises(){
        //creo la conexión
        $conexion = crearConexion();
        $selectPaises = "SELECT * from pais";
        
        $listaPaises =  mysqli_query($conexion,$selectPaises);
        $listObjetosPais = [];
        foreach($listaPaises as $pais){
            $p = new Pais($pais['idpais'],$pais['nombre']);
            $listObjetosPais[] = $p;
        }
        //cierro la conexión
        $conexion->close();
        return $listObjetosPais; 

    }


?>