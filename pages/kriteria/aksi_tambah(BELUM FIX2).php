<?php
// mengambil data koneksi
include '../../lib/koneksi.php';

// eksekusi sql


$bobot = 0;
$query  = "SELECT bobot FROM tabel_kriteria";
$result = $koneksi->query($query);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $bobot = $row['bobot'] + $bobot;
}
if ($bobot > 1) {
    echo "<script>alert('GAGAL INPUT, BOBOT LEBIH DARI 1');window.location = '../../content.php?module=list_kriteria';</script>";
} else {
    // mengambil data dari form sebelumnya

    $id_kriteria = $_POST['id_kriteria'];
    $kriteria = $_POST['kriteria'];
    $kode = $_POST['kode'];
    $type = $_POST['type'];
    $bobot = $_POST['bobot'];
    // sql

    $sql = "INSERT INTO tabel_kriteria (id_kriteria,kriteria, kode, type, bobot)
		VALUES ('$id_kriteria','$kriteria', '$kode', '$type', '$bobot')";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('INPUT DATA BERHASIL');window.location = '../../content.php?module=list_kriteria';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
