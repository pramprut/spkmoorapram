<?php
include "./lib/koneksi.php";
$sql = "DELETE FROM sub_kriteria WHERE id_sub='$_GET[id_sub]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS DATA BERHASIL');window.location = 'content.php?module=sub_kriteria';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>