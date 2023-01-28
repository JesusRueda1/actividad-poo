<?php
include('../Salario.php');
class Salario extends Salary{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function calcularSalarioContratista($valorHora, $totalHoras) {
        return $valorHora * $totalHoras;
    }

    public function calcularSalarioPlanta($salarioBasico, $horasExtras, $deducciones) {
        return $salarioBasico + $horasExtras - $deducciones;
    }

    public function obtenerSalarioEmpleado($idEmpleado) {
        //aqui se consultaria a la base de datos para obtener el salario del empleado con el id dado
        return $this->getEmpleado($idEmpleado);
    }

    public function actualizarSalarioEmpleado($idEmpleado, $nuevoSalario) {
        //aqui se actualizaria el salario del empleado con el id dado en la base de datos
    }

    public function obtenerListadoEmpleados() {
        //aqui se consultaria a la base de datos para obtener un listado de todos los empleados y sus salarios
    }
}
$persona = new Salario();
$persona->$this->obtenerSalarioEmpleado();
?>