<?php
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "database_latihan";

    function __construct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $role = $_POST["role"];
            $availiability = $_POST["availability"];
            $age = $_POST["age"];
            $lokasi = $_POST["lokasi"];
            $experience = $_POST["experience"];
            $email = $_POST["email"];
            $koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            $insertQuery = "INSERT INTO `user_data` (`name`, `role`, `availability`, `usia`, `lokasi`, `experience`, `email`) VALUES ('$nama', '$role', '$availiability', '$age', '$lokasi', '$experience', '$email')";
            $result = mysqli_query($koneksi, $insertQuery);
            if ($result) {
                echo "SQL Success";
            } else {
                echo "SQL Failure";
            }
        } else {
            echo "Input tidak valid";
        }
    }
}

$koneksi = new database();
?>