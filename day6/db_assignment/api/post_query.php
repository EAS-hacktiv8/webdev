<?php
include('../tools/koneksi.php');
$query = "SELECT * FROM blog_posts";
$result = mysqli_query($db->conn, $query);
$resultArray = mysqli_fetch_all($result);
header("Content-Type: application/json");
echo json_encode($resultArray);
exit();
