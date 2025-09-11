<!-- proses input data yang di ambil -->
<?php
error_reporting(0);
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



$id_alter = $_POST['pilih'];
$jmlh_dipilih = count($id_alter);
$tanggal =  date("Y-m-d H:i:s");

if ($jmlh_dipilih > 0) {

  for ($i = 0; $i < $jmlh_dipilih; $i++) {
    $queryAddperhitungan = mysqli_query($db, "INSERT INTO hitung (id_siswa,tanggal) VALUES ('$id_alter[$i]','$tanggal')");
  }
  if ($queryAddperhitungan) {
    echo "<script>alert('BERHASIL AMBIL DATA');
                               window.location='../../content.php?module=hitung';
                              </script>";
  } else {
    echo "<script>alert('GAGAL MENGAMBIL DATA');
                                window.location='../../content.php?module=pilih_siswa';
                                </script>";
  }
} else if ($jmlh_dipilih <= 0) {


  echo "<script>alert('PILIH SISWA TERLEBIH DAHULU');
    window.location='../../content.php?module=pilih_siswa.php';
    </script>";
}

?>