<?php

class Fecha{
    private $dia;
    private $mes;
    private $anio;

    public function __construct($dia, $mes, $anio){
        $this->dia = $dia;
        $this->mes = $mes;
        $this->anio = $anio;
    }

    public function getAnio(){
        return $this->anio;
    }
    public function getMes(){
        return $this->mes;
    }
    public function getDia(){
        return $this->dia;
    }

    public function setAnio($anio){
        $this->anio = $anio;
    }
    public function setMes($mes){
        $this->mes = $mes;
    }

    public function setDia($dia){
        $this->dia = $dia;
    }

    public function __tostring(){
        $mensaje = "Dia: " . $this->getDia() . "\n";
        $mensaje .= "Mes: " . $this->getMes() . "\n";
        $mensaje .= "Anio: " . $this->getAnio() . "\n";

        return $mensaje;
    }

    public function darFechaAbreviada(){
        $fechaAbreviada = $this->getDia() . "/". $this->getMes() . "/" . $this->getAnio() . "\n"; 

        return $fechaAbreviada;
    }

    public function darFechaExtendida(){
        $meses = [
            "1" =>"enero",
            "2"=> "febrero",
            "3"=> "marzo",
            "4"=> "abril",
            "5"=> "mayo",
            "6"=> "junio",
            "7"=> "julio",
            "8"=> "agosto",
            "9"=> "septiembre",
            "10"=> "octubre",
            "11"=> "noviembre",
            "12"=> "diciembre"
        ];

        $mesNumerico = $this->getMes();

        $fechaExtendida = $this->getDia() ." de " . $meses["$mesNumerico"]. " de " . $this->getAnio() . "\n" ; 

        return $fechaExtendida;
    }

    public function incremento($numeroIncrmento, $fecha){
        $nuevaFecha = null;

        return $nuevaFecha;
    }

    private function esAnioBisiesto($anio){
        $esBisiesto = false;
            if($anio % 4 == 0){
                if(!($anio % 100 == 0) && $anio % 400 == 0){
                    $esBisiesto = true;
                }
            }
        return $esBisiesto;
    }

    private function aumentarUnDia(){
        $this->setDia($this->getDia() + 1);
    }

    private function incrementoDias($cantDias, $objFecha){
        $fechaIncrementada = null;

        $dias = $objFecha->getDia();
        if(){

        }else{
            $fechaIncrementada->
        }

        return $fechaIncrementada;
    }

   

}