<?php

Class Cliente{
    private $nombre;
    private $apellido;
    private $baja;
    private $tipoDoc;
    private $numDoc;

    public function __construct ($nombre, $apellido, $baja, $tipoDoc, $numDoc){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->baja = $baja;
        $this->tipoDoc = $tipoDoc;
        $this->numDoc = $numDoc;
        
    }

    function getNombre (){
        return $this->nombre;
    }
    function setNombre ($nombre){
        $this->nombre = $nombre;
    }
    function getApellido (){
        return $this->apellido;
    }
    function setApellido ($apellido){
        $this->apellido = $apellido;
    }
    function getBaja (){
        return $this->baja;
    }
    function setBaja ($baja){
        $this->baja = $baja;
    }
    function getTipoDoc (){
        return  $this->tipoDoc;
    }
    function setTipoDoc ($tipoDoc){
        $this->tipoDoc = $tipoDoc;
    }
    function getNumDoc (){
        return $this->numDoc;
    }
    function setNumDoc ($numDoc){
        $this->numDoc = $numDoc;
    }

    public function __toString() {
        $str = '';

        $str = 'Nombre : ' . $this->getNombre() . 'Apellido : ' . $this->getApellido() . 'Dado de baja : ' .
         $this->getBaja() . 'Tipo de documento : ' . $this->getTipoDoc() . ' Numero de Documento : ' . $this->getNumDoc();

         return $str;
    }

    
}