<?php

    declare(strict_types=1);

    class Persona {

        public function __construct(
            private string $nombre,
            private string $apellido,
            private int $edad,
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

        public function setEdad($edad):void{
            $this->edad = $edad;
        }

        public function getEdad():int{
            return $this->edad;
        }

        public function getNombreCompleto():string{
            return $this->nombre ." ". $this->apellido. "<br>";
        }

    }

?>