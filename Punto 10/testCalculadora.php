<?php

include_once("Calculadora.php");

$calculadora = new calculadora(5, 6);

echo $calculadora->sumar() . "\n";
echo $calculadora->restar() . "\n";
echo $calculadora->multiplicar() . "\n";
echo $calculadora->dividir() . "\n";
