<?php
include "./lib/koneksi.php";
$sql = "DELETE FROM tabel_kriteria WHERE id_kriteria='$_GET[id_kriteria]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS DATA BERHASIL');window.location = 'content.php?module=list_kriteria';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>