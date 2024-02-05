<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit();
}
include('../tools/koneksi.php');
$dataUserName = $_POST['username'];
$dataPassword = $_POST['password'];
$query = "SELECT * FROM `blog_users` WHERE `username` = '$dataUserName' AND `password` = '$dataPassword'";
$result = mysqli_query($db->conn, $query);
$resultArray = mysqli_fetch_array($result);
if (!is_null($resultArray)) {
    $_SESSION["favcolor"] = "green";
    header("Location: ../admin.php");
    exit;
} else {
    header("Location: ../login.php");
}
exit();
