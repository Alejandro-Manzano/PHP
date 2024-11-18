<?php

declare(strict_types=1);

class Cliente {

    private array $direcciones = [];

    public function __construct(
        private string $nombre ,
        private string $apellido,
        private float $saldo,
        private float $saldoMinimo,
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
    
    public function getSaldoMinimo():float{
        return $this->saldoMinimo;
    }

    public function getNombreCompleto():string{
        return $this->nombre ." ". $this->apellido. "<br>";
    }

    public function puedeRetirarFondos():bool{
        return $this->saldo > $this->getSaldoMinimo();
    }

    public static function toHtml(Cliente $cliente): string {
        $html .= "
            <h1>Nombre completo: ".$cliente->getNombreCompleto()."</h1>
            <p>Saldo: ".$cliente->getSaldo()."</p>
            <p>Puedo retirar?: ".($cliente->puedeRetirarFondos() ? "Sí" : "No")."</p>
        ";

        if (empty($cliente->direcciones)) {
            $html .= "<p>No hay direcciones</p>";
        } else {
            $html .= "<ol>";
            foreach ($cliente->direcciones as $direccion) {
                $html .= "<li>$direccion</li>";
            }
            $html .= "</ol>";
        }

        return $html;
    }

}

$cliente = new Cliente("Javi", "Perez", 4000, 5);
$cliente->agregarDireccion("Av. Mchupichu");
$cliente->agregarDireccion("Calle Toledo");
echo Cliente::toHtml($cliente);

?>