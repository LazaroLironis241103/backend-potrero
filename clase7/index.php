<?php

//Punto 1-A
$array = array();

$contador = 0;

$numero = 1;


while ($contador < 10) {

    if ($numero % 2 == 0) {
        $array[] = $numero;
        $contador++;
    }
   
    $numero++;
}

foreach ($array as $elemento) {
    echo $elemento . "<br>";
}
echo "<br>";

//Punto B
$array = array("Pedro", "Ana", 34, 1);

print_r($array);
echo "<br>";
echo "<br>";

//Punto C
$arrayAsociativo = array(
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayo 3703",
    "Teléfono" => "1122334455"
);

print_r($arrayAsociativo);
echo "<br>";
echo "<br>";

//Punto D
$ciudades = array(
    0 => "Madrid",
    1 => "Barcelona",
    2 => "Londres",
    3 => "New York",
    4 => "Los Ángeles",
    5 => "Chicago"
);

foreach ($ciudades as $indice => $nombre) {
    echo "La ciudad con el índice $indice tiene el nombre $nombre.<br>";
}
echo "<br>";
echo "<br>";

//Punto E
$ciudades = array(
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Ángeles",
    "CCG" => "Chicago"
);

foreach ($ciudades as $indice => $nombre) {
    echo "El índice de $nombre es $indice.<br>";
}
?>