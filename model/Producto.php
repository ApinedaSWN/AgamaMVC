<?php
class Producto extends EntidadBase{
    private $id;
    private $nombre;
    private $precio;
    private $marca;

    public function __construct($adapter) {
        $table="producto";
        parent::__construct($table,$adapter);
    }

    public function getId() {
        return $this->id_producto;
    }

    public function setId($id) {
        $this->id_producto = $id;
    }

    public function getNombre() {
        return $this->producto;
    }

    public function setNombre($nombre) {
        $this->producto = $nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function save(){
        $query="INSERT INTO producto (id_producto,nombre,precio,marca)
                VALUES(NULL,
                       '".$this->producto."',
                       '".$this->precio."',
                       '".$this->marca."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>
