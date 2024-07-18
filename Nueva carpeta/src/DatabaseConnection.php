<?php

namespace App;

use mysqli;

class DatabaseConnection
{
    private mysqli $conn;

    public function getConn(): mysqli
    {
        return $this->conn;
    }

    // Método para cerrar la conexión
    public function close(): void
    {
        $this->conn->close();
    }

    public function open(): void
    {
        $db_host = "localhost";
        $db_user = "admin";
        $db_password = "root123";
        $db_name = "blog";

        // Crear la conexión
        $this->conn = new mysqli($db_host, $db_user, $db_password, $db_name);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
