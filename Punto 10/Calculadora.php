<?php

class Calculadora{
    private $operando1;
    private $operando2;

    public function __construct($operando1, $operando2){
        $this->operando1 = $operando1;
        $this->operando2 = $operando2;
    }

    public function getOperando1(){
        return $this->operando1;
    }
    public function getOperando2(){
        return $this->operando2;
    }

    public function setOperando1($operando1){
        $this->operando1 = $operando1;
    }
    public function setOperando2($operando2){
        $this->operando2 = $operando2;
    }

    public function __tostring(){
        $mensaje = "Valor del operando 1: " . $this->getOperando1() . "\n";
        $mensaje .= "Valor del operando 2: ". $this->getOperando2() . "\n";

        return $mensaje;
    }

    public function sumar(){
        return $this->getOperando1() + $this->getOperando2();
    }
    public function restar(){
        return $this->getOperando1() - $this->getOperando2();
    }

    public function multiplicar(){
        return $this->getOperando1() * $this->getOperando2();
    }

    public function dividir(){
        if ($this->getOperando2() == 0) {
            throw new Exception("No se puede dividir entre cero");
        }
        return $this->getOperando1() / $this->getOperando2();
    }

}