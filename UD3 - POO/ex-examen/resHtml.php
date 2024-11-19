<?php

    include_once "toHtml.php";

    $cliente = new Cliente("Javi", "Fdez", 4000);
    $cliente->agregarDireccion("Av. San Luis");
    $cliente->agregarDireccion("Av. del Paraiso");
    $cliente->agregarDireccion("Av. del Paraiso");
    echo Cliente::toHtml($cliente);

?>