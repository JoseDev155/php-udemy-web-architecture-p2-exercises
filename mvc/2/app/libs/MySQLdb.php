<?php

class MySQLdb {
    private $host = "localhost";
    private $usuario = "root";
    private $clave = "kgta4e#"; // XAMPP esta vacio, en MAMP root
    private $db = "mvc";
    private $puerto = ""; // MAMP necesitamos el puerto
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->usuario, $this->clave, $this->db);
        if (mysqli_connect_errno()) {
            printf("Error en la conexión con la base de datos: %s", mysqli_connect_error());
            exit();
        } else {
            // print "Conexión exitosa";
        }

        if (!mysqli_set_charset($this->conn, "utf8")) {
            printf("Error en la conversión de caracteres: %s", mysqli_error($this->conn));
            exit();
        } else {
            // print "El conjunto de caracteres es: " . mysqli_character_set_name($this->conn);
        }
    }

    public function querySelect($sql) {
        $data = array();
        $r = $this->conn->query($sql);
        while ($row = mysqli_fetch_assoc($r))
            array_push($data, $row);
        return $data;
    }
}
?>