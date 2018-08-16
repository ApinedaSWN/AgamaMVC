<?php
class EntidadBase{
    private $table;
    private $db;
    private $conectar;

    public function __construct($table, $adapter) {
        $this->table=(string) $table;

		/*
        require_once 'Conectar.php';
        $this->conectar=new Conectar();
        $this->db=$this->conectar->conexion();
		 */
		$this->conectar = null;
		$this->db = $adapter;
    }

    public function getConetar(){
        return $this->conectar;
    }

    public function db(){
        return $this->db;
    }

    public function getAll(){
        $query=$this->db->query("SELECT * FROM $this->table ORDER BY id_$this->table DESC");
        while ($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }

        return $resultSet;
    }

    public function getById($id){
        $query=$this->db->query("SELECT * FROM $this->table WHERE id_$this->table=$id");

        if($row = $query->fetch_object()) {
           $resultSet=$row;
        }

        return $resultSet;
    }

    public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");

        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }

        return $resultSet;
    }
    public function validation($usuario,$usr,$password,$pass){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $usuario='$value' AND $password='$pass'");
        $row = $query->num_rows();
        return $row;
    }

    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id_$this->table=$id");
        return $query;
    }

    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }


    /*
     * Aqui podemos montarnos un monton de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */

}
?>
