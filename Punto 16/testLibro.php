<?php

include_once("Libro.php");

$libro = new Libro("284903892", "El prisionero de Azkaban", "2013", "Salamandra", "JK. Rowling");

echo $libro;

function iguales($pLibro, $pArreglo){
    $seEncontro = false;
    $arreglo = $pArreglo;

    foreach($arreglo as $libro){
        if($libro->getIsbn === $pLibro->getIsbn()){
            $seEncontro = true;
        }
    }
    return $seEncontro;
}

function libroDeEditoriales($arregloLibros, $pEditoriales){
    $librosPorEditorial =[];

    $arreglo = $arregloLibros;

    foreach($arreglo as $libro){
        if($libro->getEditorial() === $pEditoriales){
            $librosPorEditorial[] = $libro; // ¿Que clave - valor va en el arreglo asosiativo?
        }
    }

    return $librosPorEditorial;
}
