<?php
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $contactId = $_POST['id'];
    $contactName = $_POST['name'];
    $contactEmail = $_POST['email'];
    $contactPhone = $_POST['phone'];
    $contactBirthDate = $_POST['birthday'] ?? null;
    include '../model/kontak.php';
    $result = $kontaks->updateContact($contactId, $contactName, $contactEmail, $contactPhone, $contactBirthDate);
    if ($result) {
        echo "
        <script>
            alert('Success editing contact!');
            window.location.href='../index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Failed editing contact!');
            window.location.href='../index.php';
        </script>";
    }
} else {
    header('Location: ../index.php');
}
