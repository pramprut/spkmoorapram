<?php
include '../../lib/koneksi.php';
$id_kriteria = $_GET['id_kriteria'];
$kriteria = $_POST['kriteria'];
$kode = $_POST['kode'];
$type = $_POST['type'];
$bobot = $_POST['bobot'];
$bobot1 = $bobot;
$jumlah = 0;
$query  = "SELECT bobot FROM tabel_kriteria WHERE id_kriteria=$id_kriteria";
$query2  = "SELECT bobot FROM tabel_kriteria ";
$result = $koneksi->query($query);
$result2 = $koneksi->query($query2);
$fix = 0;
// $hasil = $result->fetch_array(MYSQLI_ASSOC);

// fix convert integer
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $fix = $row['bobot'];
}
while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
    $bobot1 += $row['bobot'];
    // $jumlah = $bobot1 + $bobot;
    // echo "bobot = " . $bobot1 . " </br>";
    // echo "jumlah = " . $jumlah . " </br>";
}
// var_dump($hasil);
$bobot1 -= $fix;
// die();
if ($bobot1 > 1) {
    echo "<script>alert('GAGAL UPDATE, BOBOT LEBIH DARI 1');window.location = '../../content.php?module=list_kriteria';</script>";
} else {

    $sql = "UPDATE tabel_kriteria SET kriteria='$kriteria',kode='$kode',type='$type',bobot='$bobot' WHERE id_kriteria=$id_kriteria";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('UPDATE DATA BERHASIL');window.location = '../../content.php?module=list_kriteria';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
