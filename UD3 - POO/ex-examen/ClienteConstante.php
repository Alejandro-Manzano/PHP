<?php

declare(strict_types=1);

class Cliente {

    private array $direcciones = [];
    private const SALDO_MINIMO = 100;

    public function __construct(
        private string $nombre = "Javi",
        private string $apellido = "Perez",
        private float $saldo = 5,
    ){}

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

    public function getNombreCompleto():string{
        return $this->nombre ." ". $this->apellido. "<br>";
    }

    public function puedeRetirarFondos():bool{
        return $this->saldo > self::SALDO_MINIMO;
    }

}

$cliente = new Cliente();
echo $cliente->getNombreCompleto();
echo $cliente->getSaldo(). "<br>";
echo "Puede retirar ? " . ($cliente->puedeRetirarFondos() ? "Si" : "No") . "<br>";
$cliente->agregarDireccion("Av. Machupichu");
$cliente->agregarDireccion("Calle Toledo");
echo $cliente->listarDirecciones();

?>