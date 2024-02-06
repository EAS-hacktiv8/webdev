<?php
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "kontak_mgmt";
    var $conn;

    function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
}

$db = new database();
?>