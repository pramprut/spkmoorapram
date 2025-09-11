<?php
//-- konfigurasi database
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

// PROSES PENGAMBILAN KRITERIA DARI DB

$sql = 'SELECT * FROM tabel_kriteria';
$result = $db->query($sql);
//-- menyiapkan variable penampung berupa array
$kriteria = array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
  $kriteria[$row['id_kriteria']] = array($row['kriteria'], $row['type'], $row['bobot']);
} ?>

<?php
// MENAMPILKAN KRITERIA
/*print_r($kriteria);*/
/*echo "Tampilan Kriteria<br><br>";*/
/*echo "<br><br> Tampilan Kriteria<br><br>";
foreach ($kriteria as $id_kriteria => $value) {
   echo $kriteria[$id_kriteria][0]." ".$kriteria[$id_kriteria][1]." = ".$kriteria[$id_kriteria][2]."<br>";
}
*/
?>
<!--  <div class="">
   <div class="col-xl-12 col-lg-12">
     <div class="col-lg-12 col-xl-12">
      <h3>Tampilan Kriteria</h3>
      </div>
    </div> 

    <div class="adv-table" style=" padding-right: 30px; padding-left: 30px; padding-top: 1px;">
      <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>
                    <th>Nama Kriteria</th>
                    <th>Bobot</th>
                  </tr>
                </thead>
          <tbody>
          <?php
          foreach ($kriteria as $id_kriteria => $value) {
            echo "<tr>";
            echo "<td>" . $kriteria[$id_kriteria][0] . "</td>"; {
              echo "<td>" . $kriteria[$id_kriteria][2] . "</td>";
            }
          }
          ?>
   
          </tbody>
      </table>
   </div>
 </div>

 -->
<?php
//proses pengambilan nilai

$sql = 'SELECT * FROM hitung JOIN tabel_siswa on hitung.id_siswa=tabel_siswa.id_siswa';
$result = $db->query($sql);
//-- menyiapkan variable penampung berupa array
$alternatif = array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
  $alternatif[$row['id_siswa']] = array(
    $row['nama'],
    $row['shooting'],
    $row['dribbling'],
    $row['passing'],
    $row['ball_control'],
    $row['heading'],
    $row['positioning'],
    $row['ball_position'],
    $row['transition_movement'],
    $row['speed'],
    $row['coordination'],
    $row['agility'],
    $row['confidence'],
    $row['concentration'],
    $row['fairplay'],
    $row['attitude']
  );
} ?>

<!-- //MENAMPILKAN NILAI ALTERNATIF
echo "<br> INPUTAN ALTERNATIF <br>===================<br>";
foreach ($alternatif as $id_siswa => $value) {
   for ($i=0; $i <= 7 ; $i++) { 
      echo $alternatif[$id_siswa][$i]." ";
   }
   echo "<br>";
} -->
<!-- MENAMPILKAN NILAI ALTERNATIF -->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Analisa Perhitungan</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div class="container-fluid">
        <!-- Card -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Inputan Alternatif</h3>
            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped table-sm">
                <thead style="text-transform: capitalize;">
                  <tr>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>K6</th>
                    <th>K7</th>
                    <th>K8</th>
                    <th>K9</th>
                    <th>K10</th>
                    <th>K11</th>
                    <th>K12</th>
                    <th>K13</th>
                    <th>K14</th>
                    <th>K15</th>
                  </tr>
                </thead>
                <tbody style="text-transform: capitalize;">

                  <?php
                  foreach ($alternatif as $id_siswa => $value) {
                    echo "<tr>";

                    for ($i = 4; $i <= 4; $i++) {
                      echo "<td>" . $alternatif[$id_siswa][1] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][2] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][3] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][4] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][5] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][6] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][7] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][8] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][9] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][10] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][11] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][12] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][13] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][14] . "</td>";
                      echo "<td>" . $alternatif[$id_siswa][15] . "</td>";
                    }
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


        <?php

        //proses merubah nilai ke angka

        //-- query untuk mendapatkan semua data sample penilaian di tabel moo_nilai
        $sql = 'SELECT * FROM tabel_nilai ORDER BY id_siswa,id_kriteria';
        $result = $db->query($sql);
        //-- menyiapkan variable penampung berupa array
        $sample = array();
        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($result as $row) {
          //-- jika array $sample[$row['id_alternatif']] belum ada maka buat baru
          // -- $row['id_alternatif'] adalah id kandidat/alternatif
          if (!isset($sample[$row['id_siswa']])) {
            $sample[$row['id_siswa']] = array();
          }
          $sample[$row['id_siswa']][$row['id_kriteria']] = $row['nilai'];
        }
        ?>

        <!-- //MENAMPILKAN PERUBAHAN NILAI KE ANGKA
echo "<br> KONVERSI NILAI ANGKA <br>==================<br>";
foreach ($sample as $id_sample => $value) {
   foreach ($kriteria as $id_kriteria => $value) {
      echo $sample[$id_sample][$id_kriteria]." ";
   }
   echo "<br>";
} -->


        <!-- //MENAMPILKAN PERUBAHAN NILAI KE ANGKA -->

        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Konversi Nilai</h3>
            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped table-sm">
                <thead style="text-transform: capitalize;">
                  <tr>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>K6</th>
                    <th>K7</th>
                    <th>K8</th>
                    <th>K9</th>
                    <th>K10</th>
                    <th>K11</th>
                    <th>K12</th>
                    <th>K13</th>
                    <th>K14</th>
                    <th>K15</th>
                  </tr>
                </thead>
                <tbody style="text-transform: capitalize;">

                  <?php
                  $norm_siswaa = array();
                  $no = 1;
                  foreach ($alternatif as $a => $va) {
                    //$nama_alt[$k]=$va[0];
                    echo "<tr>";
                    //echo "<th>".$no++."</th>";
                    //echo "<th>".$nama_alt[$k]."</th>";
                    foreach ($kriteria as $k => $v) {
                      if (is_nan($sample[$a][$k])) {
                        $sample[$a][$k] = 0;
                      } elseif (is_infinite($sample[$a][$k])) {
                        $sample[$a][$k] = 0;
                      }
                      echo "<td>" . round($sample[$a][$k], 2) . "</td>";
                    }
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


        <?php

        // PROSES NORMALISASI MATRIX
        //-- inisialisasi nilai normalisasi dengan nilai dari $sample
        $normal = $sample;
        foreach ($kriteria as $id_kriteria => $k) {
          //-- inisialisasi nilai pembagi tiap kriteria
          $pembagi = 0;
          foreach ($alternatif as $id_siswa => $a) {
            $pembagi += pow($sample[$id_siswa][$id_kriteria], 2);
          }
          foreach ($alternatif as $id_alternatif => $a) {
            $normal[$id_alternatif][$id_kriteria] /= sqrt($pembagi);
          }
        }

        /*//MENAMPILKAN NORMALISASI MATRIX
echo "<br> NORMALISASI MATRIX <br>==================<br>";
foreach ($normal as $id_normal => $value) {
   foreach ($kriteria as $id_kriteria => $value) {
      echo $normal[$id_normal][$id_kriteria]." | ";
   }
   echo "<br>";
}*/
        ?>

        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Normalisasi Matriks</h3>
            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped table-sm">
                <thead style="text-transform: capitalize;">
                  <tr>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>K6</th>
                    <th>K7</th>
                    <th>K8</th>
                    <th>K9</th>
                    <th>K10</th>
                    <th>K11</th>
                    <th>K12</th>
                    <th>K13</th>
                    <th>K14</th>
                    <th>K15</th>
                  </tr>
                </thead>
                <tbody style="text-transform: capitalize;">

                  <?php
                  $norm_siswa = array();
                  $no = 1;
                  foreach ($alternatif as $a => $va) {
                    //$nama_alt[$k]=$va[0];
                    echo "<tr>";
                    //echo "<th>".$no++."</th>";
                    //echo "<th>".$nama_alt[$k]."</th>";
                    foreach ($kriteria as $k => $v) {
                      if (is_nan($normal[$a][$k])) {
                        $normal[$a][$k] = 0;
                      } elseif (is_infinite($normal[$a][$k])) {
                        $normal[$a][$k] = 0;
                      }
                      echo "<td>" . round($normal[$a][$k], 3) . "</td>";
                    }
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->



        <?php
        //MENGHITUNG NILAI OPTIMASI
        $optimasi = array();
        foreach ($alternatif as $id_siswa => $a) {
          $optimasi[$id_siswa] = 0;
          foreach ($kriteria as $id_kriteria => $k) {
            $optimasi[$id_siswa] += $normal[$id_siswa][$id_kriteria] * ($k[1] == 'benefit' ? 1 : -1) * $k[2];
          }
        }


        /*//menampilkan NILAI OPTIMASI

echo "<br> NILAI OPTIMASI <br>==================<br>";
foreach ($optimasi as $id_optimasi => $value) {
      echo $alternatif[$id_optimasi][0].$id_optimasi."<br>".$optimasi[$id_optimasi];
   echo "<br>=======<br>";
}
*/
        ?>

        <!-- Card -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Nilai Optimasi</h3>
            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped table-sm">
                <thead style="text-transform: capitalize;">
                  <tr>
                    <th>Alternatif</th>
                    <th>Nilai Optimasi</th>
                  </tr>
                </thead>
                <tbody style="text-transform: capitalize;">
                  <?php
                  //--mengurutkan data secara descending dengan tetap mempertahankan key/index array-nya
                  arsort($optimasi);
                  //-- mendapatkan key/index item array yang pertama
                  $index = key($optimasi);
                  foreach ($optimasi as $id_optimasi => $value) {
                    echo "<tr>";
                    echo "<td>" . $alternatif[$id_optimasi][0] . "</td>";
                    echo "<td>" . round($optimasi[$id_optimasi], 3) . "</td>";

                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
              <a onclick="history.back();"><button type="button" class="btn btn-success" style="float:Left; margin-top:10px; margin-bottom:10px; margin-left:10px;">Kembali</button></a>
              <?php
              if ($_SESSION['namauser'] == 'admin') {
              ?>
                <a href="content.php?module=list_hasil"><button type="button" class="btn btn-primary" style="float:Left; margin-top:10px; margin-bottom:10px; margin-left:10px;">Ranking</button></a>
                <a href="cetak.php"><button type="button" class="btn btn-warning" style="float:Left; margin-top:10px; margin-bottom:10px; margin-left:10px;">Cetak</button></a>
              <?php
              }
              ?>
            </div>
          </div>
          <!-- /.card-body -->
        </div>



        <!-- /.card -->
      </div>
    </div>
  </div>

</body>

</html>

<?php
//MERANGKING

//--mengurutkan data secara descending dengan tetap mempertahankan key/index array-nya
/*arsort($optimasi);
//-- mendapatkan key/index item array yang pertama
$index=key($optimasi);
*/

//-- menampilkan hasil akhir
/*echo "<br> NILAI OPTIMASI URUT <br>==================<br>";
foreach ($optimasi as $id_optimasi => $value) {
      echo $alternatif[$id_optimasi][0].$id_optimasi."<br>".$optimasi[$id_optimasi];
   echo "<br>=======<br>";
}*/

/*echo "<br> HASIL 3 TERTINGGI <br>==================<br>";
$rank = 1;
$terimaa = $_POST['jsiswa'];
$tanggal =  date("Y-m-d h:i:s");
foreach ($optimasi as $id_optimasi => $value) {
      echo $alternatif[$id_optimasi][0].$id_optimasi."<br>".$optimasi[$id_optimasi];
      $nama_simpan = $alternatif[$id_optimasi][0];
      if ($rank <= $terimaa) {
        $sqlInput = "INSERT INTO tabel_hasil (nama, nilai,tanggal,status)
        VALUES ('$nama_simpan','$optimasi[$id_optimasi]','$tanggal','rekomendasi')";
        $db->query($sqlInput);
      }else{
        $sqlInput = "INSERT INTO tabel_hasil (nama, nilai,tanggal,status)
        VALUES ('$nama_simpan','$optimasi[$id_optimasi]','$tanggal','tidak rekomendasi')";
        $db->query($sqlInput);
      }
      echo "<br>=======<br>";
      $rank++;
}
*/
/*echo "<script>alert('data berhasil di hitung');window.location = '../../index.php?module=list_hasil';</script>";*/

?>