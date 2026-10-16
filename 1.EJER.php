<?php

// 1. Realice una aplicación en php que nos permita determinar cuál es la variable
// mayor, la variable del medio y la menor, también si todas son iguales. Además,
// decir si dos de las variables son iguales si la que queda es mayor o menor, se
// debe utilizar el condicional if, else if o else. 


$a = rand(1, 30);
$b = rand(1, 30);
$c = rand(1, 30);

echo "Los números son: $a, $b, $c";
echo "<br><br>";

// 1. Si todas son iguales
if ($a == $b && $b == $c) {
    echo "Todas las variables son iguales ($a).";
} 
// 2. Si todas son diferentes (las 6 combinaciones ordenadas que ya tenías)
else if ($a > $b && $b > $c) {
    echo "Mayor: " . $a . ", medio: " . $b . ", Menor: " . $c;
} 
else if ($a > $c && $c > $b) {
    echo "Mayor: " . $a . ", medio: " . $c . ", Menor: " . $b;
} 
else if ($b > $a && $a > $c) {
    echo "Mayor: " . $b . ", medio: " . $a . ", Menor: " . $c;
} 
else if ($b > $c && $c > $a) {
    echo "Mayor: " . $b . ", medio: " . $c . ", Menor: " . $a;
} 
else if ($c > $b && $b > $a) {
    echo "Mayor: " . $c . ", medio: " . $b . ", Menor: " . $a;
} 
else if ($c > $a && $a > $b) {
    echo "Mayor: " . $c . ", medio: " . $a . ", Menor: " . $b;
} 
// 3. Si dos variables son iguales y la que queda es mayor o menor
else if ($a == $b && $c > $a) {
    echo "Las variables \$a y \$b son iguales ($a), y la que queda (\$c) es mayor ($c).";
} 
else if ($a == $b && $c < $a) {
    echo "Las variables \$a y \$b son iguales ($a), y la que queda (\$c) es menor ($c).";
} 
else if ($a == $c && $b > $a) {
    echo "Las variables \$a y \$c son iguales ($a), y la que queda (\$b) es mayor ($b).";
} 
else if ($a == $c && $b < $a) {
    echo "Las variables \$a y \$c son iguales ($a), y la que queda (\$b) es menor ($b).";
} 
else if ($b == $c && $a > $b) {
    echo "Las variables \$b y \$c son iguales ($b), y la que queda (\$a) es mayor ($a).";
} 
else {
    echo "Las variables \$b y \$c son iguales ($b), y la que queda (\$a) es menor ($a).";
}

?>