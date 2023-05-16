<?php

include 'conexionDB.php';
include ('../VO/productoVO.php');

class producto extends conexionDB {

    private $PDO;
    private $productoVO;
    private $tabla;

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "Productos";
    }

    public function agregar($vo) {
        $this->productoVO=$vo;
        $sentencia = "INSERT INTO $this->tabla VALUES (:nombre, :descripcion, :precio, :cantidad)";

        //preparar sentencia
        $resultado = $this->PDO->prepare($sentencia);
        //obtener datos del VO para agregarlo a la sentencia decaurdo al alias
        //ejecutar sentencia
        return $resultado->execute(array(
            ':nombre'=> $this->productoVO->getnombre(),
            ':descripcion'=> $this->productoVO->getdescripcion(),
            ':precio'=> $this->productoVO->getprecio(),
            ':cantidad' => $this ->productoVO->getcantidad(),
          

            
        ));
    }

   
    
}
