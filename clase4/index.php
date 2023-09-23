<?php
//Punto 1
    $n = 10;

    if ($n > 0) {
      echo "El número ingresado es un número positivo";
    }
    echo "<br>";
//Punto 2
    $n = 5;

    if ($n > 1 && $n < 10) {
      echo "El número ingresado es mayor a 1 y menor a 10";
    }
    echo "<br>";
//Punto 3
    $n = 8;

    if ($n >= 10 || $n < 2) {
      echo "El número ingresado es mayor o igual a 10 o menor a 2";
    } else {
      echo "El número ingresado no pudo ser validado";
    }
    echo "<br>";
//Punto 4
    $numero1 = 15;
    $numero2 = 10;

    if ($numero1 > $numero2) {
      $suma = $numero1 + $numero2;
      $resta = $numero1 - $numero2;

      echo "La suma de los números es: $suma";
      echo "<br>";
      echo "La resta de los números es: $resta";
    }

    if ($numero2 > $numero1) {
      $multiplicacion = $numero1 * $numero2;
      $division = $numero2 / $numero1;
      $resto = $numero1 % $numero2;

      echo "La multiplicación de los números es: $multiplicacion";
      echo "<br>";
      echo "La división de los números es: $division";
      echo "<br>";
      echo "El resto de los números es: $resto";
    }
    
    if ($numero1 == $numero2) {
      echo "Los números ingresados son iguales";
    }
 ?>
