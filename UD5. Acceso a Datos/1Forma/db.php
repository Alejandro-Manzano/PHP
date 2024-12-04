<?php

function crearConexion($servidor = "localhost:3306",$usuario = "root",$password= "",$database = "2daw"):bool|mysqli{

    return $conexion = mysqli_connect($servidor,$usuario,$password,$database);
    
}

?>