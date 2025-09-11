<?php
include '../../lib/koneksi.php';
$shooting = $_POST['shooting'];
$dribbling = $_POST['dribbling'];
$passing = $_POST['passing'];
$ball_control = $_POST['ball_control'];
$heading = $_POST['heading'];
$positioning = $_POST['positioning'];
$ball_position = $_POST['ball_position'];
$transition_movement = $_POST['transition_movement'];
$speed = $_POST['speed'];
$coordination = $_POST['coordination'];
$agility = $_POST['agility'];
$confidence = $_POST['confidence'];
$concentration = $_POST['concentration'];
$fairplay = $_POST['fairplay'];
$attitude = $_POST['attitude'];

$sql = "UPDATE tabel_siswa SET shooting='$shooting',dribbling='$dribbling',passing='$passing',ball_control='$ball_control',heading='$heading',positioning='$positioning',ball_position='$ball_position',transition_movement='$transition_movement',speed='$speed',coordination='$coordination',agility='$agility',confidence='$confidence',concentration='$concentration',fairplay='$fairplay',attitude='$attitude' WHERE id_siswa=$id_siswa";

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('UPDATE DATA BERHASIL');window.location = '../../content.php?module=list_siswa';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>