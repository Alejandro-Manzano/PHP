<?php

class Pais {

    public function __construct(
        private string $idPais,
        private string $nombre
    ) {}

    // Getter para idPais
    public function getIdPais(): string {
        return $this->idPais;
    }

    // Getter para nombre
    public function getNombre(): string {
        return $this->nombre;
    }
}

?>
