<?php

    class Vuelo {

        public function __construct(
            private int $idvuelo,
            private int $nplazas,
            private bool $disponible,
            private int $idpais
        )
        {}

        public function getIdVuelo():int{
            return $this->idvuelo;
        }

        public function getNPlazas():int{
            return $this->nplazas;
        }

        public function getDisponible(): bool {
            return $this->disponible;
        }
        

        public function getIdPais():int{
            return $this->idpais;
        }

    }

?>