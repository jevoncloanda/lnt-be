<?php require_once '../process/koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book | Books Collection</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- MENAMPILKAN DATA BUKU YANG MAU DIEDIT -->
    <?php
    $book = tampilPerBuku($_GET['idBuku']);
    ?>

    <!-- NAVBAR -->
    <?php require_once '../views/navbar.php'; ?>

    <!-- TABLE -->
    <div class="container">
        <div class="col-md-8 bg-light table-wrapper">
            <h3>Edit Book - <?= $book->judul; ?></h3>
            <hr>

            <form action="" method="post">
                <form>
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukkan judul buku" value="<?= $book->judul; ?>">
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" class="form-control" name="penulis" placeholder="Penulis buku" value="<?= $book->penulis; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input type="number" class="form-control" name="tahun_terbit" placeholder="Masukkan tahun terbit" value="<?= $book->tahun_terbit; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Halaman</label>
                        <input type="number" class="form-control" name="jumlah_halaman" placeholder="Masukkan jumlah halaman" value="<?= $book->jumlah_halaman; ?>">
                    </div>
                    <button type="submit" name="editBuku" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </form>
        </div>
    </div>

    <!-- PROSES MENGEDIT BUKU -->
    <?php
    if (isset($_POST['editBuku'])) {
        // apapun yang diketik oleh user
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $jumlah_halaman = $_POST['jumlah_halaman'];

        editBuku($_GET['idBuku'], $judul, $penulis, $tahun_terbit, $jumlah_halaman);
    }
    ?>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>