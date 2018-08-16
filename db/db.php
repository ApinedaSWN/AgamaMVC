<?php
    /**
     *
     */
    class Conectar
    {
        public function FunctionName()
        {
            $conexion = new mysqli('localhost','root','','puntoAgama');
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }
    }

 ?>
