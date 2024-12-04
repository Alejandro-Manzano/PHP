<?php

    class Pasajero {

        public function __construct(
            private int $idpasajero,
            private string $nombre,
            private string $apaterno,
            private string $amaterno,
            private string $idpais,
            private string $telefono,
            private string $email,
            private string $idvuelo
        ){}

        public function getIdPasajero(): int {
            return $this->idpasajero;
        }
    
        public function getNombre(): string {
            return $this->nombre;
        }
    
        public function getApaterno(): string {
            return $this->apaterno;
        }
    
        public function getAmaterno(): string {
            return $this->amaterno;
        }
    
        public function getIdPais(): string {
            return $this->idpais;
        }

        public function getTelefono(): string {
            return $this->telefono;
        }
    
        public function getEmail(): string {
            return $this->email;
        }
    
        public function getIdVuelo(): string {
            return $this->idvuelo;
        }

    }

?>