<?php

include_once("CuentaBancaria.php");


$cuentaBancaria = new CuentaBancaria("8945730928934" , "23902902", 90223, 5);
echo $cuentaBancaria;

$cuentaBancaria->actulizarSaldo();

echo $cuentaBancaria;

$cuentaBancaria->depositar(923);

echo $cuentaBancaria;

$cuentaBancaria->retirar(1234);

echo $cuentaBancaria;