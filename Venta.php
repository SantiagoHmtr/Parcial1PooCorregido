<?php
//Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de bicicletas y el precio final.
Class Venta {
    private $numero;
    private $fecha;
    private $objCliente;
    private $colBicicletas;
    private $precioFinal;


    public function __construct($numero, $fecha, $objCliente, $precioFinal){
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->objCliente = $objCliente;
        $this->precioFinal = $precioFinal;
        
    }
    function getNumero (){
        return $this->numero;
    }
    function setNumero ($numero){
        $this->numero = $numero;
    }
    function getFecha (){
        return $this->fecha;
    }
    function setFecha ($fecha){
        $this->fecha = $fecha;
    }
    function getObjCliente (){
        return $this->objCliente;
    }
    function setObjCliente ($objCliente){
        $this->objCliente;
    }
    function getPrecioFinal (){
        return $this->precioFinal;
    }
    function setPrecioFinal ($precioFinal){
        $this->precioFinal;
    }
    function getColBicicletas(){
        return $this->colBicicletas;
    }
    function setColBicicletas($colBicicletas){
        $this->colBicicletas = $colBicicletas;
    }

    public function __toString(){
        $str = '';
        $str = 'Numero : ' . $this->getNumero() . 'Fecha: ' . $this->getFecha() . 'Cliente : ' . $this->getObjCliente() . 'Precio final : ' . $this->getPrecioFinal();
        return $str;
    }

    public function incorporarBicicleta($objBici){
        $coleccionBicis = $this->getColBicicletas();
        $disponible = $objBici->getActiva();
        $precioFinal = $objBici->darPrecioVenta();
        if ($precioFinal >0){
            $this->setPrecioFinal($precioFinal);
            array_push($coleccionBicis, $objBici);
            $this->setColBicicletas($coleccionBicis);
            return true;
        } else {
            return false;
        }
    }
    
}