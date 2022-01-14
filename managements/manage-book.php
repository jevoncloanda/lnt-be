<?php require_once '../process/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Book | Books Collection</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <?php require_once '../views/navbar.php'; ?>

    <!-- TABLE -->
    <div class="container">
        <div class="col-md-8 bg-light table-wrapper">
            <h3>Manage Book</h3>
            <hr>
            <a href="create-book.php" class="btn btn-dark btn-sm mb-4">Tambah Buku</a>
            <table class="table">
                <thead>
                    <tr align="center">
                        <th>#</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tahun Terbit</th>
                        <th>Jumlah Halaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $books = tampilBuku();
                    $i = 1;
                    foreach ($books as $book) :
                    ?>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $book['judul'] ?></td>
                            <td><?= $book['penulis'] ?></td>
                            <td><?= $book['tahun_terbit'] ?></td>
                            <td><?= $book['jumlah_halaman'] ?></td>
                            <td>
                                <a href="edit-book.php?idBuku=<?= $book['id']; ?>" class="btn btn-primary btn-sm">Edit</a>


                                <a href="delete-book.php?idBuku=<?= $book['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus buku?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>