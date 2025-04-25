<?php
/**
 * Libros
 */

class Libros extends Controlador {
    private $modelo;

    function __construct()
    {
        $this->modelo = $this->modelo("LibrosModelo");
    }

    public function index() {
        $data = $this->modelo->getLibros();
        // Llamamos a la vista
        $this->vista("LibrosVista", $data);
    }
}
?>