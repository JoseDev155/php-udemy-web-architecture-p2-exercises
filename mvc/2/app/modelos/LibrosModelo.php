<?php
/**
 * 
 */

class LibrosModelo {
    private $db;

    function __construct()
    {
        $this->db = new MySQLdb();
    }

    public function getLibros() {
        // $libros_array = array();
        // $r = $this->db->querySelect("SELECT * FROM libros");
        // while ($row = $this->db->fetch_assoc($r))
        //     array_push($libros_array, $row);
        // return $libros_array;

        $data = $this->db->querySelect("SELECT * FROM libros");
        return $data;
    }
}
?>