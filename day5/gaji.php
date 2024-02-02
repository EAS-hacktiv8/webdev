<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="">
        <label>Masukkan gaji pokok</label><br />
        <input type="number" name="inputGaji" required placeholder="gaji"><br /><br />
        <label>Masukkan tunjangan</label><br />
        <input type="number" name="inputTunjangan" required placeholder="Masukkan tunjangan"><br /><br />
        <label>Masukkan potongan</label><br />
        <input type="number" name="inputPotongan" required placeholder="Masukkan potongan"><br /><br /><br />
        <button type="submit">Calculate</button>
    </form>

    <?php
    function formatNumber($number)
    {
        return number_format($number, 0, ",", ".");
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputGaji = $_POST["inputGaji"];
        $inputTunjangan = $_POST["inputTunjangan"];
        $inputPotongan = $_POST["inputPotongan"];

        if (!(is_numeric($inputGaji) && $inputGaji > 0)) {
            echo "input gaji bukan angka atau tidak positif";
            exit;
        }
        if (!(is_numeric($inputTunjangan) && $inputTunjangan > 0)) {
            echo "input tunjangan bukan angka atau tidak positif";
            exit;
        }
        if (!(is_numeric($inputPotongan) && $inputPotongan > 0)) {
            echo "input potongan bukan angka atau tidak positif";
            exit;
        }
        $inputGaji = $_POST["inputGaji"];
        $inputTunjangan = $_POST["inputTunjangan"];
        $inputPotongan = $_POST["inputPotongan"];
        $gajiBruto = $inputGaji + $inputTunjangan;
        $pajak_penghasilan = $gajiBruto / 10;
        $asuransi_kesehatan = $gajiBruto / 20;
        $gajiBersih = $gajiBruto - $pajak_penghasilan - $asuransi_kesehatan;
        echo "Dengan gaji sebesar Rp " . formatNumber($inputGaji) . ", tunjangan sebesar Rp " . formatNumber($inputTunjangan) . ", potongan sebesar Rp " . formatNumber($inputPotongan) . " :<br/><br/>";
        echo "Gaji bruto adalah Rp " . formatNumber($gajiBruto) . "<br/>";
        echo "Pajak penghasilan adalah Rp " . formatNumber($pajak_penghasilan) . "<br/>";
        echo "Asuransi kesehatan adalah Rp " . formatNumber($asuransi_kesehatan) . "<br/>";
        echo "Gaji bersih adalah Rp " . formatNumber($gajiBersih) . "<br/>";
    }
    ?>
</body>

</html>