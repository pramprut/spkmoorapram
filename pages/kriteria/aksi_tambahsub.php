<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$skala_sub = $_POST['skala_sub'];
$nilai_bobotsub = $_POST['nilai_bobotsub'];
$keterangan_sub = $_POST['keterangan_sub'];
// sql
$sql = "INSERT INTO sub_kriteria (skala_sub, nilai_bobotsub, keterangan_sub)
VALUES ('$skala_sub', '$nilai_bobotsub', '$keterangan_sub')";
// eksekusi sql
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('INPUT DATA BERHASIL');window.location = '../../content.php?module=sub_kriteria';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>


