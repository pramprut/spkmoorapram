<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_skripsi5';
//-- koneksi ke database server dengan extension mysqli
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
//-- hentikan program dan tampilkan pesan kesalahan jika koneksi gagal
if ($db->connect_error) {
  die('Connect Error (' . $db->connect_errno . ')' . $db->connect_error);
}


$queryhapushitung = mysqli_query($db, "DELETE FROM hitung");


if ($queryhapushitung) {
  echo "<script>alert('RESET DATA BERHASIL');
                               window.location='../../content.php?module=pilih_siswa';
                              </script>";
} else {
  echo "<script>alert('RESET DATA GAGAL');
                                window.location='../../content.php?module=pilih_siswa';
                                </script>";
}
