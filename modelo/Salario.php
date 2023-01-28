<?php 
require('conexion.php');
class Salary {
    private $db;
    private $table = 'empleados';
    private $contratistas_table = 'contratistas';
    private $planta_table = 'empleados_planta';
    private $idEmpleado;

    public function __construct() {
        // Conexión a la base de datos
        $this->db = new Database;
    }

    // Método para calcular salario de contratistas
    public function calculateContratistaSalary($valorHora, $totalHoras) {
        return $valorHora * $totalHoras;
    }

    // Método para calcular salario de empleados de planta
    public function calculatePlantaSalary($sueldoBasico, $horasExtras, $deducciones) {
        return $sueldoBasico + $horasExtras - $deducciones;
    }

    // Método para obtener información de los empleados de la base de datos
    public function getEmployees() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    // Método para obtener información de los contratistas de la base de datos
    public function getContratistas() {
        $this->db->query("SELECT * FROM {$this->contratistas_table}");
        return $this->db->resultSet();
    }

    // Método para obtener información de los empleados de planta de la base de datos
    public function getEmpleadosPlanta() {
        $this->db->query("SELECT * FROM {$this->planta_table}");
        return $this->db->resultSet();
    }

    public function getEmpleado(){
        $this->db->query("SELECT * FROM {$this->table} WHERE id='$idEmpleado'");
        return $this->db->resultSet();
    }
}

?>