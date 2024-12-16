<?php

namespace classes;

use PDO;
use PDOException;

class DBConnector
{
    private $host = "localhost";
    private $db_name = "Quizzard";
    private $db_user = "root";
    private $db_pass = "";
    private $con;

    public function getConnection()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";";

        try {
            $this->con = new PDO($dsn, $this->db_user, $this->db_pass);
            return $this->con;
        } catch (PDOException $e) {
            die("Connection failed: ") . $e->getMessage();
        }
    }
}