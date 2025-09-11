<?php
include "./lib/koneksi.php";
$sql = "DELETE FROM tabel_hasil WHERE nama='$_GET[nama]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS DATA BERHASIL');window.location = 'content.php?module=list_detail_siswa&&tanggal=$_GET[tanggal]';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>