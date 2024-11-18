<?php

declare(strict_types=1);

class Persona {

    public function __construct(
        private string $nombre,
        private string $apellido
    ){}

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getNombreCompleto(){
        return $this->nombre. " " . $this->apellido;
    }

}

class Empleado extends Persona {

    public function __construct(
        string $nombre,
        string $apellido,
        private float $salario,
        private array $telefonos = []
    ){
        parent::__construct($nombre, $apellido);
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function debePagarImpuestos(): bool{
        return $this->salario>3000;
    }

    public function newTlfn($telefono){
        $this->telefonos[] = $telefono;
    }

    public function printTlf(): string{

        if (count($this->telefonos) > 0) {
            return implode(', ' ,$this->telefonos);
        } else{
            return "No hay";
        }
    }

    public static function toHtml(Empleado $emp): string{
        return "
            <h1>Nombre completo: " . $emp->getNombreCompleto(). "</h1>
            <p>Sueldo: " .$emp->getSalario()."</p>
            <p>Impuestos? ".($emp->debePagarImpuestos()?"si":"no")."</p>
        ";
    }
    
}

$empleado = new Empleado("Alex", "Jimenez", 4000);
echo $empleado->getNombreCompleto();
echo $empleado->setSalario(3222). "<br>";
echo $empleado->getSalario();
echo $empleado->printTlf(). "<br>";
echo Empleado::toHtml($empleado);