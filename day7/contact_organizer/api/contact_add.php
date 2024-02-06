<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $contactName = $_POST['name'];
    $contactEmail = $_POST['email'];
    $contactPhone = $_POST['phone'];
    $contactBirthDate = $_POST['birthday'] ?? null;
    include '../model/kontak.php';
    $result = $kontaks->addContact($contactName, $contactEmail, $contactPhone, $contactBirthDate);
    if ($result) {
        echo "
        <script>
            alert('Success adding contact!');
            window.location.href='../index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Failed adding contact!');
            window.location.href='../add.php';
        </script>";
    }
} else {
    header("Location: ../index.php");
}
