<?php
include '../../lib/koneksi.php';
$disiplin = $_POST['disiplin'];
$kerjasamatim = $_POST['kerjasamatim'];
$sikapprofesional = $_POST['sikapprofesional'];
$kreatifitas = $_POST['kreatifitas'];
$kinerja = $_POST['kinerja'];

$sql = "UPDATE tabel_siswa SET disiplin='$disiplin',kerjasamatim='$kerjasamatim',sikapprofesional='$sikapprofesional',kreatifitas='$kreatifitas',kinerja='$kinerja' WHERE id_siswa=$id_siswa";

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('UPDATE DATA BERHASIL');window.location = '../../content.php?module=list_siswa';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>