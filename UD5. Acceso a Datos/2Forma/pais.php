<?php
    declare(strict_types=1);
    class Pais{
        public function __construct(
            private string $idPais, 
            private string $nombre){

        }

        public function getIdPais():string{
            return $this->idPais;
        }

        public function getnombre():string{
            return $this->nombre;
        }
    }
    
?>