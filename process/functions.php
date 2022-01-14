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

// MENAMPILKAN DATA PER BUKU
function tampilPerBuku($id)
{
    global $koneksi;

    $perintahTampilBuku = $koneksi->prepare("SELECT * FROM books WHERE id='$id'");
    $perintahTampilBuku->execute();

    return $perintahTampilBuku->fetch(PDO::FETCH_OBJ);
}

// MENGEDIT BUKU
function editBuku($id, $judul, $penulis, $tahun_terbit, $jml_halaman)
{
    global $koneksi;

    // mengecek kalo ada yg kosong / diisi spasi doang
    if (empty(trim($judul)) || empty(trim($penulis)) || empty(trim($tahun_terbit)) || empty(trim($jml_halaman))) {
        echo '<script>alert("Harap isi data yang benar, tidak boleh ada yang kosong!");</script>';
    } else {
        // jalanin update buku
        $perintahEditBuku = $koneksi->prepare("
        UPDATE books SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun_terbit', jumlah_halaman='$jml_halaman' WHERE id='$id'
        ");
        $perintahEditBuku->execute();

        echo '
            <script>
            alert("Buku berhasil diedit!");
            window.location.href="manage-book.php";
            </script>
        ';
    }
}

// HAPUS BUKu
function hapusBuku($id)
{
    global $koneksi;
    $hapusBuku = $koneksi->prepare("DELETE FROM books WHERE id='$id'");
    $hapusBuku->execute();

    echo '
        <script>
        alert("Buku berhasil dihapus!");
        window.location.href="manage-book.php";
        </script>
    ';
}
