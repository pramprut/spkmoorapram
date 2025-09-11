<?php
include "./lib/koneksi.php";
$sql = "DELETE FROM tabel_siswa WHERE id_siswa='$_GET[id_siswa]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS DATA BERHASIL');window.location = 'content.php?module=list_siswa';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>