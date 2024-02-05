<?php
include('../tools/koneksi.php');
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    $query = "DELETE FROM `blog_users` WHERE `id` = $userId";
    $result = mysqli_query($db->conn, $query);
    header("Content-Type: application/json");
    echo json_encode($result);
    exit();
}
