<?php
function formatWithBirthdayReminder(string $birthday_string) {
    if ($birthday_string == null) {
        return "-";
    }
    $currentMonth = date('m');
    $birthdayMonth = date('m', strtotime($birthday_string));
    if ($currentMonth == $birthdayMonth) {
        return "$birthday_string, Birthday is near!";
    } else {
        return $birthday_string;
    }
}
?>