<?php
function asignarCalificacion($nota) {
    if ($nota >= 0 && $nota <= 2) {
        return "Muy deficiente";
    } elseif ($nota >= 3 && $nota <= 5) {
        return "Insuficiente";
    } elseif ($nota >= 6 && $nota <= 7) {
        return "Bien";
    } elseif ($nota >= 8 && $nota <= 9) {
        return "Notable";
    } elseif ($nota == 10) {
        return "Sobresaliente";
    } else {
        return "Nota inválida";
    }
}


if (isset($_GET['submit'])) {
    
    $nombre = $_GET['nombreUsuario'];
    $nota = $_GET['notaNumerica'];

    if (!isset($nombre) || empty($nombre)) {
        echo "ERROR! El nombre del alumno no fue ingresado.";
        exit;
    }

    if (!isset($nota) || empty($nota)) {
        echo "ERROR! La nota numérica no fue ingresada.";
        exit;
    }

    if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
        echo "ERROR! La nota numérica no es válida.";
        exit;
    }

    $calificacion = asignarCalificacion($nota);

    echo "El alumno $nombre tiene una calificación de $calificacion.";
}

 ?>
