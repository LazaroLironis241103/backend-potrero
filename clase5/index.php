<?php
//Punto A
//Ejercicio 1
    $numero = 1;
    while ($numero <= 9) {
    echo $numero . "\n";
    $numero++;
    }
    echo "<br>";

//Ejercicio 2
    $numero = 9;
    while ($numero >= 1) {
    echo $numero . "\n";
    $numero--;
    }
    echo "<br>";

//Ejercicio 3
    $numero = 2;
    while ($numero <= 20) {
    if ($numero % 2 == 0) {
    echo $numero . "\n";
    }
    $numero++;
    }
    echo "<br>";

//Ejercicio 4
    $numero = 1;
    while ($numero <= 20) {
    if ($numero % 2 != 0) {
    echo $numero . "\n";
    }
    $numero++;
    }
    echo "<br>";

//Ejercicio 5
    $suma = 0;
    $contador = 1;
    while ($contador <= 20) {
        $suma = $suma + $contador;
        $contador = $contador + 1;
    }
    echo "La suma de los números del 1 al 20 es: " . $suma;
    echo "<br>";

//Ejercicio 6
    $suma = 0;
    $contador = 2;
    while ($contador <= 20) {
        $suma = $suma + $contador;
        $contador = $contador + 2;
    }
    echo "La suma de los números pares del 1 al 20 es: " . $suma;
    echo "<br>";
 ?>
