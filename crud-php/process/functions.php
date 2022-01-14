<?php

// MENAMPILKAN BUKU
function tampilBuku()
{
    global $koneksi;
    $statement = $koneksi->prepare("SELECT * FROM books");
    $statement->execute();
    $tampilBuku = $statement->fetchAll();

    return $tampilBuku;
}

// MENAMBAH BUKU
function tambahBuku($judul, $penulis, $tahun_terbit, $jml_halaman)
{
    global $koneksi;
    if (empty(trim($judul)) || empty(trim($penulis)) || empty(trim($tahun_terbit)) || empty(trim($jml_halaman))) {
        echo '<script>alert("Harap isi data yang benar, tidak boleh ada yang kosong!");</script>';
    } else {
        $tambahBuku = $koneksi->prepare("
        INSERT INTO books(judul, penulis, tahun_terbit, jumlah_halaman)
        VALUES('$judul', '$penulis', '$tahun_terbit', '$jml_halaman')
        ");
        $tambahBuku->execute();

        echo '
        <script>
        alert("Buku berhasil ditambah!");
        window.location.href="manage-book.php";
        </script>
        ';
    }
}
