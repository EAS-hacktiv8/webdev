<?php
include '../model/kontak.php';
if (isset($_GET['searchTerm']) && isset($_GET['method'])) {
    $search = $_GET['searchTerm'];
    if ($_GET['method'] == 'name') {
        $result = $kontaks->searchContactbyName($search);
    } else if ($_GET['method'] == 'email') {
        $result = $kontaks->searchContactbyEmail($search);
    }
    header('Content-Type: application/json');
    echo json_encode($result);
} else {
    header('Content-Type: application/json');
    echo json_encode([]);
}
?>
