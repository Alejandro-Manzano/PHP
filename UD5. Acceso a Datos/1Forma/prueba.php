<?php

include_once "paisCRUD.php";
include_once "pasajeroCRUD.php";
include_once "vueloCRUD.php";

echo "<h1>Paises Recorridos: </h1>";
foreach (listarPaises() as $pais) {
    echo "Nombre: ".$pais->getNombre(). " // Id:" .$pais->getIDPais(). "<br>";
}
echo "<hr>";

echo "<h1>Pasajeros: </h1>";
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
    echo "<br>"; // Línea separadora entre cada pasajero
}

echo "<hr>";

echo "<h1>Vuelos: </h1>";
foreach (listarVuelos() as $vuelo) {
    echo "ID Vuelo: " . $vuelo->getIdVuelo(). "<br>";
    echo "Nº plazas: " . $vuelo->getNPlazas() . "<br>";
    echo "Disponible? : ".($vuelo->getDisponible() ? 'true' : 'false' ). "<br>";
    echo "ID pais: " . $vuelo->getIdPais() . "<br>";
    echo "<br>";
}

echo "<hr>";

?>