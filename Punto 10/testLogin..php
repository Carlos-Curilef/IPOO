<?php

include_once("Login.php");

$ultimasContraseñas = [
    "18032934", "29402930", "3379293", "4024930902"
];

$nombreUsuario = "Juan";

$fraseRecordada = "Un número cualquiera";
$contraseña = "83r0293";
$login = new Login($nombreUsuario, $contraseña, $fraseRecordada, $ultimasContraseñas);
echo $login;

