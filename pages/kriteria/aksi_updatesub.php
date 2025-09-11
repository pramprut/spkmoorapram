<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
$id_sub = $_GET['id_sub'];
$skala_sub = $_POST['skala_sub'];
$nilai_bobotsub = $_POST['nilai_bobotsub'];
$keterangan_sub = $_POST['keterangan_sub'];
// sql
$sql = "UPDATE sub_kriteria SET skala_sub='$skala_sub',nilai_bobotsub='$nilai_bobotsub',keterangan_sub='$keterangan_sub' WHERE id_sub=$id_sub";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('UPDATE DATA BERHASIL');window.location = '../../content.php?module=sub_kriteria';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>
