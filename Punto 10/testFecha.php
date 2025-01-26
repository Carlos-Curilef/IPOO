<?php


include_once("Fecha.php");

$fecha = new Fecha(23, 12, 2024);

echo $fecha;
echo $fecha->darFechaAbreviada();
echo $fecha->darFechaExtendida();