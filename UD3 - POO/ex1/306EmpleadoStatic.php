<?php

declare(strict_types= 1);

class Empleado {

    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 2000,
        private float $sueldoTope = 5000,
        private array $telefonos = []
    ) {}

    
    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        // Contamos los elementos del array de teléfonos
        if (!empty($this->telefonos)) {
            // Utilizamos implode para concatenar los números separados por comas
            return implode(', ', $this->telefonos);
        } else {
            return "No hay teléfonos";
        }
    }

    // Método para vaciar la lista de teléfonos
    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    // Métodos getter y setter
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): void {
        $this->sueldo = $sueldo;
    }

    // Método para obtener el nombre completo
    public function getNombreCompleto(): string {
        return "{$this->nombre} {$this->apellidos}";
    }

    // Método para determinar si debe pagar impuestos
    public function debePagarImpuestos(): bool {
        return $this->sueldo > $this->sueldoTope;
    }

    public function setSueldoTope(float $sueldoTope): void {
        $this->sueldoTope = $sueldoTope;
    }

    public function getSueldoTope(): float{
        return $this->sueldoTope;
    }

    public static function toHtml(Empleado $emp): string{
        return "
            <h1>Nombre completo: " . $emp->getNombreCompleto(). "</h1>
            <p>Sueldo: " .$emp->getSueldo()."</p>
            <p>Sueldo tope: " .$emp->getSueldoTope(). "</p>
            <p>Impuestos? ".($emp->debePagarImpuestos()?"si":"no")."</p>
        ";
    }

}

$empleado = new Empleado("Juan", "Pérez");
echo Empleado::toHtml($empleado);