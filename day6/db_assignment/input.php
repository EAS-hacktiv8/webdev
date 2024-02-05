<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data</title>
</head>

<body>
    <nav>
        <a href="index.php">Home</a>&nbsp;&nbsp;
        <a href="login.php">Admin</a>&nbsp;&nbsp;
    </nav>
    <h3>Input Data</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="title">Judul</label><br />
            <input type="text" name="title" required><br /><br />
        </div>
        <div>
            <label for="content">Konten</label><br />
            <input type="text" name="content" required><br /><br />
        </div>
        <div>
            <label for="category">Kategori</label><br />
            <select name="category">
                <?php
                include('./tools/koneksi.php');
                $selectQuery = "SELECT * FROM `blog_categories`";
                $result = mysqli_query($db->conn, $selectQuery);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=" . $row['catname'] . ">" . $row['catname'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="image">Gambar</label><br />
            <input type="file" name="image"><br /><br />
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
    <?php
    if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category']) && isset($_FILES['image'])) {
        $dataJudul = $_POST['title'];
        $dataKonten = $_POST['content'];
        $dataKategori = $_POST['category'];
        if ($_FILES['image']['name'] == "") {
            $dataGambar = null;
        } else {
            $dataGambar = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
        }
        $insertQuery = "INSERT INTO `blog_posts` (`title`, `content`, `catname`, `images`) VALUES ('$dataJudul', '$dataKonten', '$dataKategori', '$dataGambar')";
        mysqli_query($db->conn, $insertQuery);
        echo "<br /><h3>Berhasil menambahkan post</h3><br />";
    }
    ?>
</body>

</html>