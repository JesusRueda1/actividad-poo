<?php 
class Conexion {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'poo';
    private $conn;
    
    public function __construct(){
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if($this->conn->connect_error){
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }
    
    public function getConexion(){
        return $this->conn;
    }
}
?>