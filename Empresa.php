<?php

Class Empresa {

    private $denominacion;
    private $direccion;
    private $colClientes;
    private $colBicicletas;
    private $colVentas;


    public function __construct($denominacion, $direccion){
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
    }

    public function getDenominacion(){
        return $this->denominacion;
    }
    public function setDenominacion($denominacion){
        $this->denominacion = $denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function getColClientes(){
        return $this->colClientes;
    }
    public function setColClientes($colClientes){
        $this->colClientes = $colClientes;
    }
    public function getColBicicletas(){
        return $this->colBicicletas;
    }
    public function setColBicicletas($colBicicletas){
        $this->colBicicletas = $colBicicletas;
    }
    public function getColVentas(){
        return $this->colVentas;
    }
    public function setColVentas($colVentas){
        $this->colVentas = $colVentas;
    }
    public function __toString(){
        $str= '';
        $str = 'Denominacion : ' . $this->getDenominacion() . 'Direccion : ' . $this->getDireccion();
        return $str;
    }

    public function retornarBici($codigoBici){
        $coleccionBicis = $this->getColBicicletas();
        $encontrado = false;
        $i = 0;
        $bici = null;
        while (!$encontrado && $i < count($coleccionBicis) ){
            $codigoBiciColeccion = $coleccionBicis[$i]->getCodigo();
            if ($codigoBici == $codigoBiciColeccion){
                $bici = $coleccionBicis[$i];
                $encontrado = true;
            }
            $i++;
        }
        return $bici;
    }
    
    public function registrarVenta ($colCodigosBici, $objCliente){
        $colBicis = $this->getColBicicletas();
        $arrayVenta = [];
        $importeFinal = 0;
        for ($i = 0; $i<(count($colCodigosBici)); $i++){
            $estadoBici = $colBicis[$i]->getActiva();
            $estadoCliente = $objCliente->getBaja();
            if ($estadoBici && $estadoCliente){
                for ($l = 0; $l<(count($colBicis)); $l++){
                        $codigoBiciCol = $colBicis[$l]->getCodigo();
                        $biciEncontrada= $this->retornarBici($codigoBiciCol);
                        array_push($arrayVenta, $biciEncontrada);
                        $importeFinal = $importeFinal + $biciEncontrada->darPrecioVenta();
                        $biciEncontrada->incorporarBicicleta();
                }   
                
            }
        }
        return $importeFinal;
    }


    public function retornarVentasXCliente($tipo, $numDoc){
        $coleccionVenta = $this->getColVentas();
        $coleccionVentaCliente = [];
        $colClientela = $this->getColClientes();
        $encontrado = false;
        $cont = 0;
        while (!$encontrado && $cont<(count($colClientela))){
            $tipoDoc = $colClientela[$cont]->getTipoDoc();
            if ($tipoDoc == $tipo){

                $cliente = $coleccionVenta[$cont]->getObjCliente();
                $num = $cliente->getNumDoc();
                if($num == $numDoc){
                    for ($i = 0 ; $i < count($coleccionVenta); $i++){
                        if ($cliente == $coleccionVenta[$i]->getObjCliente()){
                            array_push($coleccionVentaCliente, $coleccionVenta[$i]);
                        }
                    }
                    $encontrado = true;
                }

            }
            $cont++;
        }
        return $coleccionVentaCliente;
    }

}

