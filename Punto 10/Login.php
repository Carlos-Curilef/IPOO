<?php

class Login{
    private $nombreUsuario;
    private $contraseña;
    private $fraseRecordada;
    private $ultimasContraseñas;

    public function __construct($nombreUsuario, $contraseña, $fraseRecordada, $ultimasContraseñas){
        $this->nombreUsuario = $nombreUsuario;
        $this->contraseña = $contraseña;
        $this->fraseRecordada = $fraseRecordada;
        $this->ultimasContraseñas = $ultimasContraseñas;
    }

    public function getNombreUsuario(){
        return $this->nombreUsuario;
    }
    public function getContraseña(){
        return $this->contraseña;
    }
    public function getFraseRecordada(){
        return $this->fraseRecordada;
    }
    public function getUltimasConstraseña(){
        return $this->ultimasContraseñas;
    }

    public function setNombreUsuario($nombreUsuario){
        $this->nombreUsuario = $nombreUsuario;
    }

    public function setContraseña($contraseña){
        $this->contraseña = $contraseña;
    }
    public function setFraseRecordada($fraseRecordada){
        $this->fraseRecordada = $fraseRecordada;
    }

    public function setUltimasContraseñas($ultimasContraseñas){
        $this->ultimasContraseñas = $ultimasContraseñas;
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
        $mensaje = "Nombre del usuario: " . $this->getNombreUsuario() . "\n";
        $mensaje.= "Contraseña: ". $this->getContraseña() . "\n";
        $mensaje.= "Frase para recordar la contraseña: ". $this->getFraseRecordada() . "\n";
        $mensaje.= "Últimas contraseñas: \n";
        $mensaje.= $this->muestraArreglo($this->getUltimasConstraseña());

        return $mensaje;
    }

    public function validarContraseña($contraseñaAValidar){
        $esValido = false;
        if($this->getContraseña() == $contraseñaAValidar){
            $esValido = true;
        }
        return $esValido;
    }

    public function cambiarContraseña($contraseñaNueva){
        $colContraseñasRecientes = $this->getUltimasConstraseña();
        $cantContraseñasRecientes = count($colContraseñasRecientes);
        $bandera = 0;
        $contraseñaUtilizada = false;

        while(!($contraseñaUtilizada) || $bandera < $cantContraseñasRecientes){
            $contraseña = $colContraseñasRecientes[$bandera];
            if($contraseña == $contraseñaNueva){
                $contraseñaUtilizada = true;
            } else {
                $bandera++;
            }
        }

        if(!$contraseñaUtilizada){
            $this->setContraseña($contraseñaNueva);
        }

        return $contraseñaUtilizada;
    }

    public function recordar($usuario){
        return $fraseRecordada;
    }
}