<?php

declare(strict_types= 1);

class Empleado {

    private const SUELDO_TOPE = 4000;

    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 2000,
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
        return $this->sueldo > self::SUELDO_TOPE;
    }

    public function getSueldoTope(): int{
        return self::SUELDO_TOPE;
    }

}

// Ejemplo de uso:
$empleado = new Empleado("Juan", "Pérez");
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo "Nombre completo: " . $empleado->getNombreCompleto() . "<br>";
echo "Teléfonos: " . $empleado->listarTelefonos() . "<br>";
echo $empleado->debePagarImpuestos() ? "Debe pagar impuestos" : "No debe pagar impuestos";
echo "<br> Sueldo Tope: ". $empleado->getSueldoTope();