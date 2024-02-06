<?php
if (isset($_GET['id'])) {
    $contactId = $_GET['id'];
    include '../model/kontak.php';
    $result = $kontaks->deleteContact($contactId);
    if ($result) {
        echo "
        <script>
            alert('Success removing contact!');
            window.location.href='../index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Failed removing contact!');
            window.location.href='../add.php';
        </script>";
    }
} else {
    header('Location: ../index.php');
}
