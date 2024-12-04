<?php

include_once "paisCRUD.php";
include_once "pasajeroCRUD.php";

foreach (listarPaises() as $pais) {
    echo $pais->getNombre(). "<br>";
}

foreach (listarPasajeros() as $pasajero) {
    $c = $pasajero->getIdPasajero()+1;//he transformado el id a int
    echo "ID Pasajero: " . $c. "<br>";
    echo "Nombre: " . $pasajero->getNombre() . "<br>";
    echo "Apellido Paterno: " . $pasajero->getApaterno() . "<br>";
    echo "Apellido Materno: " . $pasajero->getAmaterno() . "<br>";
    echo "ID País: " . $pasajero->getIdPais() . "<br>";
    echo "Teléfono: " . $pasajero->getTelefono() . "<br>";
    echo "Email: " . $pasajero->getEmail() . "<br>";
    echo "ID Vuelo: " . $pasajero->getIdVuelo() . "<br>";
    echo "<hr>"; // Línea separadora entre cada pasajero
}

?>