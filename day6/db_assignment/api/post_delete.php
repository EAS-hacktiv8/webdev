<?php
include('../tools/koneksi.php');
if (isset($_GET['postId'])) {
    $postId = $_GET['postId'];
    $query = "DELETE FROM `blog_posts` WHERE `id` = $postId";
    $result = mysqli_query($db->conn, $query);
    header("Content-Type: application/json");
    echo json_encode($result);
    exit();
}
