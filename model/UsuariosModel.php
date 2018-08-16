<?php
class UsuariosModel extends ModeloBase{
    private $table;

    public function __construct($adapter){
        $this->table="usuario";
        parent::__construct($this->table, $adapter);
    }

    //Metodos de consulta
    public function getUnUsuario(){
        $query="SELECT * FROM usuario WHERE usuario='apineda'";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
?>
