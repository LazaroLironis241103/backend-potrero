<?php
//Punto 1
    echo "Hola Mundo";
    echo "<br>";
//Punto 2
    $cadena = 'Hola Mundo';
    echo $cadena;
    echo "<br>";
//Punto 3
    $a = 12;
    $b = 6;
    //suma
    echo $a + $b;
    echo "<br>";
    //resta
    echo $a - $b;
    echo "<br>";
    //multiplicacion
    echo $a * $b;
    echo "<br>";
    //division entera
    echo $a / $b;
    echo "<br>";
    //resto de division entera
    echo $a % $b;
    echo "<br>";
//Punto 4
    $gradosCelsius = 20;
    $gradosFahrenheit = ($gradosCelsius * 9/5) + 32 ;
    echo "La temperatura en grados Fahrenheit es: " . $gradosFahrenheit;
    echo "<br>";
//Punto 5
    //rectangulo
    $baseRectangulo = 18;
    $alturaRectangulo = 12;
    //perimetro del rectangulo
    $perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
    //area del rectangulo
    $areaRectangulo = $baseRectangulo * $alturaRectangulo;
    //resultados
    echo "El perímetro del rectángulo es: " . $perimetroRectangulo . " cm\n";
    echo "<br>";
    echo "El área del rectángulo es: " . $areaRectangulo . " cm^2\n";
    echo "<br>";
    //circulo
    $radioCirculo = 30;
    $pi = pi();
    //perimetro del circulo
    $perimetroCirculo = 2 * $pi * $radioCirculo;
    //area del circulo
    $areaCirculo = $pi * pow($radioCirculo, 2);
    //resultados
    echo "El perímetro del círculo es: " . $perimetroCirculo . " cm\n";
    echo "<br>";
    echo "El área del círculo es: " . $areaCirculo . " cm^2\n";
?>
