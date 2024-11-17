<?php

    declare(strict_types= 1);

class Empleado {
    // Propiedades privadas
    private string $nombre;
    private string  $apellidos;
    private float $sueldo;
    private array $telefonos = [];

    public function __construct($nombre, $apellidos, $sueldo = 1000) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function anyadirTelefono(int $telefono) : void {
        //$this->telefonos[] = $telefono;
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos(): string{

        $tam = count($this->telefonos);

        if ($tam > 0) {
            return implode(', ' ,$this->telefonos);
        } else{
            return "No hay";
        }

        
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

   
    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }
}


$empleado = new Empleado("Juan", "Pérez");
echo "Nombre Completo: " . $empleado->getNombreCompleto(). "<br>";
echo "Debe pagar impuestos: " . ($empleado->debePagarImpuestos() ? 'Sí' : 'No'). "<br>";

//Metodos de telefonos
$empleado->anyadirTelefono(666777666);
$empleado->anyadirTelefono(666777999);
echo $empleado->listarTelefonos();
$empleado->vaciarTelefonos(). "<br>";
echo $empleado->listarTelefonos();



?>