<?php

class CuentaBancaria{
    private $numeroCuenta;
    private $dniCliente;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numeroCuenta, $dniCliente, $saldoActual, $interesAnual){
        $this->numeroCuenta = $numeroCuenta;
        $this->dniCliente = $dniCliente;
        $this->saldoActual = $saldoActual;
        $this->interesAnual = $interesAnual;
    }

    public function getNumeroCuenta(){
        return $this->numeroCuenta;
    }
    public function getDniCliente(){
        return $this->dniCliente;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }

    public function setNumeroCuenta($numeroCuenta){
        $this->numeroCuenta = $numeroCuenta;
    }
    public function setDniCliente($dniCliente){
        $this->dniCliente = $dniCliente;
    }
    public function setSaldoActual($saldoActual){
        $this->saldoActual = $saldoActual;
    }

    public function setInteresAnual($interesAnual){
        $this->interesAnual = $interesAnual;
    }

    public function __tostring(){
        $mensaje = "Numero de cuenta: ". $this->getNumeroCuenta(). "\n";
        $mensaje.= "DNI del cliente: ". $this->getDniCliente(). "\n";
        $mensaje.= "Saldo actual: ". $this->getSaldoActual(). "\n";
        $mensaje.= "Interés anual: ". $this->getInteresAnual(). "\n";

        return $mensaje;
    }

    public function actulizarSaldo(){
        $nuevoSaldo = $this->getSaldoActual() + ($this->getSaldoActual()*($this->getInteresAnual()/365));
        $this->setSaldoActual($nuevoSaldo);
    }

    public function depositar($cant){
        $this->setSaldoActual($this->getSaldoActual() + $cant);
    }

     public function retirar($cant){
        $saldoActual = $this->getSaldoActual();
        $seRealizoExtraccion = false;
        $restaSaldo = $saldoActual - $cant;

            if($saldoActual > 0 && $restaSaldo >= 0){
                $seRealizoExtraccion = true;
                $this->setSaldoActual($restaSaldo);
            }

        return $seRealizoExtraccion;
     }
    
}