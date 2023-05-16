<?php


include('../modelo/producto.php');
include('../VO/productoVO.php');

 class controlerregistrar
{
    private $modelo;
    private $VO;
    
    public function __CONSTRUCT()

    {
        $this->modelo = new producto();
     
        $this->VO = new productoVO();
        
    }

    public function guardar()
    {
          // usuario;
          $this->VO->setnombre($_POST["nombre"]);
          $this->VO->setdescripcion($_POST["descripcion"]);
          $this->VO->setprecio($_POST["precio"]);
          $this->VO->setcantidad($_POST["cantidad"]);
         
  
        //  var_dump($this->vo);
        if ($this->modelo->agregar($this->VO)) {
            echo "ingresó correctamente";
        } else {
            echo "falló";
        }
        require_once "../catalogoProductos.html";
    }


   
}

$controller = new controlerregistrar();
$controller->guardar();
