<?php

class Teatro{
    private $nombre;
    private $direccion;
    private $funciones;

    public function __construct($nombre, $direccion, $funciones){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->funciones = $funciones;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    public function getFunciones(){
        return $this->funciones;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setFunciones($funciones){
        $this->funciones = $funciones;
    }

    private function muestraArreglo($arreglo){
        $cadena = "";
    
        if(count($arreglo) == 0){
            $cadena = "[Esta colección no tiene elementos]\n";
        } else {
            for($i=0; $i < count($arreglo); $i++){
                $cadena = $cadena . "Elemento N°". $i+1 . ": ". $arreglo[$i] ."\n";
            }
        }
        return $cadena;
    }

    public function __toString(){
        $mensaje = "Nombre: " . $this->getNombre() . "\n";
        $mensaje = "Direcciones: " . $this->getDireccion() ."\n";
        $mensaje = "Funciones: ". $this->muestraArreglo($this->getFunciones()) . "\n";

        return $mensaje;
    }
    
}