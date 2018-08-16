<?php
class Auth extends EntidadBase{

    private $usuario;
    private $password;


    public function __construct($adapter) {
        $table="usuario";
        parent::__construct($table,$adapter);
    }



}
?>
