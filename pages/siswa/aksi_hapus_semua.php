<?php
include "./lib/koneksi.php";
$sql = "DELETE FROM tabel_siswa";
if ($koneksi->query($sql) === TRUE) {
	$sql1 = "DELETE From tabel_nilai";
	if ($koneksi->query($sql1) === TRUE) {
		  echo "<script>alert('HAPUS DATA BERHASIL');window.location = 'content.php?module=list_siswa';</script>";
	} else {
    echo "Error: " . $sql1 . "<br>" . $koneksi->error;
	}
	}
	else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
	}
  
?>