<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>

<body>
    <form>
        <div>
            <label>Nama</label><br />
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Alamat</label><br />
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>
        <div>
            <button>Submit</button>
        </div>
        <?php
        $nama = @$_GET['nama'];
        $alamat = @$_GET['alamat'];
        if ($nama) {
            echo "<strong>Nama:</strong> {$nama} <br/>";
        }
        if ($alamat) {
            echo "<strong>Nama:</strong> {$alamat} <br/>";
        }
        ?>
    </form>
</body>

</html>