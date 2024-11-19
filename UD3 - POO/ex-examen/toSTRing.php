<?php

declare(strict_types=1);

class Cliente {

    private array $direcciones = [];

    public function __construct(
        private string $nombre,
        private string $apellido,
        private float $saldo,
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

    public function setNombre(string $nombre):void{
        $this->nombre = $nombre;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function setApellido(string $apellido):void{
        $this->apellido = $apellido;
    }

    public function getApellido():string{
        return $this->apellido;
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
        return $this->saldo > 100;
    }

    public function __toString():string{
        return "
            Nombre: ".$this->getNombreCompleto()."
        ";
    }

} 

$cliente = new Cliente("Javi", "Fdez", 4000);
echo $cliente;

?>