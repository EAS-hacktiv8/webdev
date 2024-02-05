<?php
include('../tools/koneksi.php');
if (isset($_GET['commentId'])) {
    $commentId = $_GET['commentId'];
    $query = "DELETE FROM `blog_comments` WHERE `id` = $commentId";
    $result = mysqli_query($db->conn, $query);
    header("Content-Type: application/json");
    echo json_encode($result);
    exit();
}
