<?php

declare(strict_types=1);
include_once "Persona.php";

class Cliente extends Persona {

    private array $direcciones = [];

    public function __construct(
        string $nombre,
        string $apellido,
        int $edad,
        private float $saldo,
    ){
        parent::__construct($nombre, $apellido, $edad);
    }

    public function agregarDireccion(string $direccion):void{
        $this->direcciones[] = $direccion;
    }

    public function listarDirecciones():string{
        return implode(", ", $this->direcciones);
    }

    public function vaciarDirecciones():void{
        $this->direcciones = [];
    }

    public function setSaldo(float $saldo):void{
        $this->saldo = $saldo;
    }

    public function getSaldo():float{
        return $this->saldo;
    }

    public function puedeRetirarFondos():bool{
        return $this->getEdad() >= 18;
    }

    public function __toString(): string {
        return "Nombre: " . $this->getNombreCompleto()." ";
    }

}

$cliente = new Cliente("Javi", "Fdez", 8, 4000);
/* echo $cliente->getNombreCompleto();
echo $cliente->getSaldo(). "<br>";
echo $cliente->getEdad(). "<br>";
echo "Puede retirar ? " . ($cliente->puedeRetirarFondos() ? "Si" : "No") . "<br>"; */
echo $cliente;
?>