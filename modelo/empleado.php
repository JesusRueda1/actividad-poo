<?php
class Empleado {
    protected $nombre;
    protected $salarioBase;
    protected $horasTrabajadas;
    protected $horasExtras;
    protected $deducciones;

    public function __construct($nombre, $salarioBase, $horasTrabajadas, $horasExtras, $deducciones) {
        $this->nombre = $nombre;
        $this->salarioBase = $salarioBase;
        $this->horasTrabajadas = $horasTrabajadas;
        $this->horasExtras = $horasExtras;
        $this->deducciones = $deducciones;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function getHorasTrabajadas() {
        return $this->horasTrabajadas;
    }

    public function getHorasExtras() {
        return $this->horasExtras;
    }

    public function getDeducciones() {
        return $this->deducciones;
    }
}

class Contratista extends Empleado {
    private $valorHora;

    public function __construct($nombre, $valorHora, $horasTrabajadas) {
        parent::__construct($nombre, 0, $horasTrabajadas, 0, 0);
        $this->valorHora = $valorHora;
    }

    public function getSalario() {
        return $this->valorHora * $this->horasTrabajadas;
    }
}

class EmpleadoDePlanta extends Empleado {
    public function getSalario() {
        return $this->salarioBase + ($this->horasExtras * 1.5) - $this->deducciones;
    }
}

class CalculadoraSalarios {
    public function calcularSalario(Empleado $empleado) {
        return $empleado->getSalario();
    }
}
?>