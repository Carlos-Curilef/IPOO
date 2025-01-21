<?php

class Reloj{
    private $hora;
    private $minuto;
    private $segundo;

    public function __construct($hora, $minuto, $segundo){
        $this->hora = $hora;
        $this->minuto = $minuto;
        $this->segundo = $segundo;
    }

    public function getHora(){
        return $this->hora;
    }
    public function getMinuto(){
        return $this->minuto;
    }
    public function getSegundo(){
        return $this->segundo;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }
    public function setMinuto($minuto){
        $this->minuto = $minuto;
    }
    public function setSegundo($segundo){
        $this->segundo = $segundo;
    }

    public function __toString(){
        $mensaje = "Hora: " . $this->getHora() . "\n";
        $mensaje .= "Minuto: ". $this->getMinuto() . "\n";
        $mensaje .= "Segundo: ". $this->getSegundo() . "\n";

        return $mensaje;
    }

    public function puestaACero(){
        $this->setHora(0);
        $this->setMinuto(0);
        $this->setSegundo(0);
    }

    public function aumentarHora(){
        if ($this->getHora() == 23) {
            $this->setHora(0);
        } else {
            $this->setHora($this->getHora() + 1);
        }
    }

    public function aumentarMinuto(){
        if ($this->getMinuto() == 59) {
            $this->aumentarHora();
            $this->setMinuto(0);
        }
        $this->setMinuto($this->getMinuto() + 1);
    }

    public function aumentarSegundo(){
        if ($this->getSegundo() == 59) {
            $this->aumentarMinuto();
            $this->setSegundo(0);
        }
        $this->setSegundo($this->getSegundo() + 1);
    }

}