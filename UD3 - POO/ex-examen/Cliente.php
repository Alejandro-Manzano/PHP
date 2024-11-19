<?php

    declare(strict_types=1);
    

    class Cliente {

        public function __construct(
            private string $nombre,
            private string $apellido,
            private float $saldo
        ){}

        public function setNombre($nombre):void{
            $this->nombre = $nombre;
        }

        public function getNombre():string{
            return $this->nombre;
        }

        public function setApellido($apellido):void{
            $this->apellido = $apellido;
        }

        public function getApellido():string{
            return $this->apellido;
        }

        public function setSaldo($saldo):void{
            $this->saldo = $saldo;
        }

        public function getSaldo():float{
            return $this->saldo;
        }

        public function getNombreCompleto():string{
            return $this->nombre ." ". $this->apellido. "<br>";
        }

        public function puedeRetirarFondos(float $cantidad):bool{
            return $this->saldo > $cantidad;
        }

    }

    $cliente = new Cliente("Javi", "Fdez", 4000);
    echo $cliente->getNombreCompleto();
    echo $cliente->getSaldo(). "<br>";
    echo "Puede retirar 300? : " . ($cliente->puedeRetirarFondos(300) ? "Sí" : "No") . "<br>";


?>