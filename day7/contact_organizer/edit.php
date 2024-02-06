<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'model/kontak.php';
    $kontakList = $kontaks->kontakList;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        foreach ($kontakList as $kontak) {
            if ($kontak->id == $id) {
                $nama = $kontak->nama;
                $email = $kontak->email;
                $nomor_telepon = $kontak->nomor_telepon;
                $tanggal_lahir = $kontak->tanggal_lahir;
                break;
            }
        }
    } else {
        header("Location: index.php");
    }
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kontak Manajemen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="add.php">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Kontak</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="api/contact_edit.php" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <?php
                        echo '<input type="text" class="form-control" id="name" required name="name" value="' . $nama . '">';
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <?php
                        echo '<input type="email" class="form-control" id="email" required name="email" value="' . $email . '">';
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <?php
                        echo '<input type="number" class="form-control" id="phone" required name="phone" value="' . $nomor_telepon . '">';
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Birthday</label>
                        <?php
                        echo '<input type="date" class="form-control" id="birthday" name="birthday" value="' . $tanggal_lahir . '">';
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-danger" onclick="history.back()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>