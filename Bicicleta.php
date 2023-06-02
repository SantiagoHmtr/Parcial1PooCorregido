<?php

Class Bicicleta {
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcentaje;
    private $incrAnual;
    private $activa;


    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentaje, $incrAnual, $activa){

        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->porcentaje = $porcentaje;
        $this->incrAnual = $incrAnual;
        $this->activa = $activa;
    }

    function getCodigo (){
        return $this->codigo;
    }
    function setCodigo ($codigo){
        $this->codigo = $codigo;
    }
    function getCosto (){
        return $this->costo;
    }
    function setCosto ($costo){
        $this->costo =$costo;
    }

    function getAnioFabricacion (){
        return $this->anioFabricacion;
    }
    function setAnioFabricacion ($anioFabricacion){
        $this->anioFabricacion = $anioFabricacion;
    }

    function getDescripcion (){
        return $this->descripcion;
    }
    function setDescripcion ($descripcion){
        $this->descripcion = $descripcion;
    }

    function getPorcentaje (){
        return $this->porcentaje;
    }
    function setPorcentaje ($porcentaje){
        $this->porcentaje = $porcentaje;
    }

    function getIncrAnual (){
        return $this->incrAnual;
    }
    function setIncrAnual ($incrAnual){
        $this->incrAnual = $incrAnual;
    }

    function getActiva (){
        return $this->activa;
    }
    function setActiva ($activa){
        $this->activa = $activa;
    }


    public function __toString(){
        $str = 'Codigo : ' . $this->getCodigo() . 'Costo : ' . $this->getCosto() . 'Año de fabricacion : ' . $this->getAnioFabricacion() . 'Descripcion : ' .
         $this->getDescripcion() . 'Porcentaje : ' . $this->getPorcentaje() . 'Incremento anual : ' . $this->getIncrAnual() . 'Activa : ' . $this->getActiva();
        return $str;
        }





    public function darPrecioVenta(){
        $disponibilidad = $this->getActiva();
        $precioBici = $this->getCosto();
        $anioBici = $this->getAnioFabricacion();
        $edadBici = 2023 - $anioBici;
        $porcAnual = $this->getIncrAnual();
        if ($disponibilidad){
            $valorVenta = $precioBici + ($precioBici * $edadBici * $porcAnual);
            return $valorVenta;
        
        }else{
            $valorVenta = -1;
            return $valorVenta;
        }
    }
}