<?php

class Libro{
    private $isbn;
    private $titulo;
    private $añoEdicion; 
    private $editorial; 
    private $nombreYApellidoAutor;

    public function __construct($isbn, $titulo, $añoEdicion, $editorial, $nombreYApellidoAutor){
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->añoEdicion = $añoEdicion;
        $this->editorial = $editorial;
        $this->nombreYApellidoAutor = $nombreYApellidoAutor;
    }

    public function getIsbn(){
        return $this->isbn;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getAñoEdición(){
        return $this->añoEdicion;
    }
    public function getEditorial(){
        return $this->editorial;
    }
    public function getNombreYApellidoAutor(){
        return $this->nombreYApellidoAutor;
    }

    public function setIsbn($isbn){
        $this->isbn = $isbn;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setAñoEdicion($añoEdicion){
        $this->añoEdicion = $añoEdicion;
    }
    public function setEditorial($editorial){
        $this->editorial = $editorial;
    }
    public function setNombreYApellidoAutor($nombreYApellidoAutor){
        $this->nombreYApellidoAutor = $nombreYApellidoAutor;
    }

    public function __tostring(){
        $mensaje = "ISBN: ". $this->getIsbn(). "\n";
        $mensaje .= "Título: ". $this->getTitulo() . "\n";
        $mensaje .= "Año de edición: ". $this->getAñoEdición() . "\n";
        $mensaje .= "Editorial: ". $this->getEditorial() . "\n";
        $mensaje .= "Nombre y Apellido del autor: ". $this->getNombreYApellidoAutor() . "\n";

        return $mensaje;
    }

    public function perteneceEditorial($nuevaEditorial){
        $pertenece = false;

        if($nuevaEditorial === $this->getEditorial()){
            $pertenece = true;
        }
        return $pertenece;
    }

    public function aniosDesdeEdición(){
        $añosTranscurridos = date("Y") - $this->getAñoEdición();

        return $añosTranscurridos;
    }
}