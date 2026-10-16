<?php
//  2. Sabiendo que la función RAND nos retorna un valor aleatorio entre un rango de
// dos enteros:
// $numero = rand(1,100);
// Declare la variable $numero en la cual se almacenará un valor que se ha
// generado en forma aleatoria entre 1 y 100. Hacer un programa que lo muestre por
// pantalla el valor generado. Mostrar además si es menor o igual a 50 o si es mayor.
// Para imprimir el contenido de una variable también utilizamos el comando ECHO 

$numero = rand(1,100);

echo "numero es: ". $numero. "<br>";


if($numero <=50) {
    echo "el numero es menor o igual que 50";
} else {
    echo "el numero es mayor a 50";
}