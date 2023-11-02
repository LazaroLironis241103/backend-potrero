<?php
//Punto 1 Ejercicio A
function calcularCuadrado($lado) {

    $perimetro = 4 * $lado;
    $superficie = $lado * $lado;

    echo "El perímetro del cuadrado es $perimetro unidades.<br>";
    echo "La superficie del cuadrado es $superficie unidades cuadradas.<br>";
  }
  
  calcularCuadrado(5);
  echo "<br>";

  //Ejercicio B
function mostrarMayusculas($cadena) {
    $mayusculas = strtoupper($cadena);
   
    echo "La cadena en mayúsculas es: $mayusculas<br>";
  }
  
  function mostrarMinusculas($cadena) {
    $minusculas = strtolower($cadena);

    echo "La cadena en minúsculas es: $minusculas<br>";
  }
  
  $cadena = "Hola Mundo";
  mostrarMayusculas($cadena);
  mostrarMinusculas($cadena);
  echo "<br>";

  //Ejercicio C
function diasDelMes($mes) {

    switch ($mes) {
      case 1: 
      case 3: 
      case 5: 
      case 7: 
      case 8: 
      case 10: 
      case 12: 
        return 31;

        break;

      case 4: 
      case 6: 
      case 9: 
      case 11: 
        return 30;
  
        break;
   
      case 2: 
        $anio = date("Y");
        $bisiesto = checkdate(2, 29, $anio);
        if ($bisiesto) {
          return 29;
        } else {
          return 28;
        }

        break;

      default:
 
        return "El mes debe ser un número entre 1 y 12.";

        break;
    }
  }
  
  $mes = 11;
  $dias = diasDelMes($mes);
 
  echo "El mes $mes tiene $dias días.<br>";
?>