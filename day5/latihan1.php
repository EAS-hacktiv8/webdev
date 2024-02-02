<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="">
        <input type="number" name="inputNumber" required placeholder="Masukkan nilai">
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumber = $_POST["inputNumber"];
        if ($inputNumber >= 85) {
            $grade = 'A';
        } elseif ($inputNumber >= 75) {
            $grade = 'B';
        } elseif ($inputNumber >= 60) {
            $grade = 'C';
        } elseif ($inputNumber >= 50) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }
        echo "Nilai dari $inputNumber adalah $grade";
    }
    ?>
</body>

</html>