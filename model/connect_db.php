<?php

class Connect_db {

    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "fitbase";
    private $conn;

    function __construct() {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection() {
        return $this->conn;
    }

    public function setConnection($conn) {
        return $this->conn = $conn;
    }
}
?>


