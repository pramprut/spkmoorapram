<?php
include "./lib/koneksi.php";
$sql = "DELETE FROM tabel_hasil WHERE tanggal='$_GET[tanggal]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS DATA BERHASIL');window.location = 'content.php?module=list_hasil';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>