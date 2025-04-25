<?php
// llamar al modelo
require_once("modelos/libros.php");
// Creal la instancia
$libro = new Libros();
$datos = $libro->getLibros();
// Llamamos a la vista
require_once("vista/Libros.php");
?>