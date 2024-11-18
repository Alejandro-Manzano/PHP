<?php
include_once "Persona.php"; // Asegúrate de incluir el archivo Cliente.php

class Empresa {
    private string $nombre;
    private string $ubi;
    private array $clientes = [];  // Aquí corregimos la propiedad para almacenar los clientes

    public function __construct(string $nombre, string $ubi) {
        $this->nombre = $nombre;
        $this->ubi = $ubi;
    }

    // Método para agregar un cliente
    public function agregarCliente(Cliente $cliente): void {
        $this->clientes[] = $cliente;  // Agregamos el cliente al array de clientes
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setUbi(string $ubi): void {
        $this->ubi = $ubi;
    }

    public function getUbi(): string {
        return $this->ubi;
    }

    // Método para listar los clientes en HTML
    public function listarClientesHtml(): string {
        $html = "<ul>";
        foreach ($this->clientes as $cliente) {
            $html .= "<li>" . $cliente->getNombre() . " - Saldo: $" . $cliente->getSaldo() . "</li>";
        }
        $html .= "</ul>";
        return $html;
    }

    // Método para calcular el saldo total de todos los clientes
    public function calcularTotalSaldo(): float {
        $totalSaldo = 0;
        foreach ($this->clientes as $cliente) {
            $totalSaldo += $cliente->getSaldo();
        }
        return $totalSaldo;
    }
}
?>