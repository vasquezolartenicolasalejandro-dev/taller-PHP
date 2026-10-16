<?php

// 4. Definir tres variables enteras. Luego definir un string que incorpore dichas
// variables y las sustituya en tiempo de ejecución. Recordar que una variable se
// sustituye cuando el string está encerrado por comillas dobles: 

$edad = 19;
$peso = 62;
$cantidad = 1;

$cliente = "los datos del cliente son $edad $peso $cantidad";
echo "$cliente";