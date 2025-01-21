<?php

include_once("Reloj.php");

$reloj = new Reloj(23, 45, 58);
echo $reloj;

$reloj->aumentarSegundo();
$reloj->aumentarSegundo();


echo $reloj;

$reloj->aumentarHora();
echo $reloj;

$reloj->puestaACero();
echo $reloj;