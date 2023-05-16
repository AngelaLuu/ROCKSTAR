<?php

class productoVO {

    private $nombre;
    private $descripcion;
    private $precio;
    private $cantidad;

 

    //! GET //
    function getnombre() {
        return $this->nombre;
    }
    function getdescripcion() {
        return $this->descripcion;
    }
    function getprecio() {
        return $this->precio;
    }
    function getcantidad() {
        return $this->cantidad;
    }
    
       //! SET //
       function setnombre($nombre) {
        $this->nombre = $nombre;
    }
    function setdescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    function setprecio($precio) {
        $this->precio = $precio;
    }
    function setcantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

   
}
    

