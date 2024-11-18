<?php
include_once "Persona.php";
include_once "Empresa.php";

// Crear clientes
$persona1 = new Persona("Juan Pérez", 500);
$persona2 = new Persona("Ana López", 300);

// Crear la empresa
$empresa = new Empresa("Mi Empresa", "Madrid");

// Agregar clientes a la empresa
$empresa->agregarCliente($persona1);
$empresa->agregarCliente($persona2);

// Listar los clientes en HTML
echo "Clientes en formato HTML:<br>";
echo $empresa->listarClientesHtml();

// Calcular el saldo total
echo "Saldo total de todos los clientes: $" . $empresa->calcularTotalSaldo();
?>