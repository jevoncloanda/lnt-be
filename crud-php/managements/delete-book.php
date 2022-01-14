<?php
require_once '../process/koneksi.php';

$id = $_GET['idBuku'];
$hapusBuku = $koneksi->prepare("DELETE FROM books WHERE id='$id'");
$hapusBuku->execute();

echo '
<script>
alert("Buku berhasil dihapus!");
window.location.href="manage-book.php";
</script>
';
