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

// verificar si se ha enviado el formulario
if (isset($_GET['submit'])) {
    // obtener los valores de los campos
    $nombre = $_GET['nombreUsuario'];
    $nota = $_GET['notaNumerica'];
    // validar que el nombre exista y no esté vacío
    if (!isset($nombre) || empty($nombre)) {
        echo "ERROR! El nombre del alumno no fue ingresado.";
        exit;
    }
    // validar que la nota exista y no esté vacía
    if (!isset($nota) || empty($nota)) {
        echo "ERROR! La nota numérica no fue ingresada.";
        exit;
    }
    // validar que la nota sea un número entre 0 y 10
    if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
        echo "ERROR! La nota numérica no es válida.";
        exit;
    }
    // asignar una calificación según la nota
    $calificacion = asignarCalificacion($nota);
    // mostrar el mensaje con el nombre y la calificación
    echo "El alumno $nombre tiene una calificación de $calificacion.";
}

 ?>
