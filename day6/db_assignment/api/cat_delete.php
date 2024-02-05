<?php
include('../tools/koneksi.php');
if (isset($_GET['catId'])) {
    $catId = $_GET['catId'];
    $query = "DELETE FROM `blog_categories` WHERE `id` = $catId";
    $result = mysqli_query($db->conn, $query);
    header("Content-Type: application/json");
    echo json_encode($result);
    exit();
}
