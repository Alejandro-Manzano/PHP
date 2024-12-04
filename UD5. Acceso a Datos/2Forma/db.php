<?php
   
    function crearConexion($servidor = "localhost:3306",$usuario = "root",$password = "", $database = "2daw"){

        return $conexion = mysqli_connect($servidor,$usuario,$password,$database);
    }
   
?>