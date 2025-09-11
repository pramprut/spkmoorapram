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
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Siswa</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Pilih Siswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php
              if ($_SESSION['namauser'] == 'user') {
              ?>
                <div class="mb-3">
                  <a href="pages/hasil/reset.php"><button class="btn btn-danger">Reset</button></a>
                </div>
              <?php
              }
              ?>
              <div class="table-responsive">
                <form method="POST" action="pages/hasil/proses_pilih_siswa.php" name="centangall">

                  <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
                    <thead>
                      <tr>
                        <th>
                          <input type="checkbox" name="allbox" onclick="checkAll(0);">
                          <b>Pilih Semua</b>
                        </th>
                        <th>No</th>
                        <th>Nama</th>
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
                    <tbody>
                      <?php
                      $no = 1;
                      $sql = "SELECT * FROM tabel_siswa";
                      $result = mysqli_query($db, $sql);
                      while ($row = mysqli_fetch_array($result)) {
                      ?>
                        <tr class="gradeX">
                          <td>
                            <input type="checkbox" name="pilih[]" value="<?= $row['id_siswa']; ?>">
                            Pilih
                          </td>
                          <td><?php echo $no++; ?></td>
                          <td><?= $row['nama'] ?></td>
                          <td><?= $row['shooting'] ?></td>
                          <td><?= $row['dribbling'] ?></td>
                          <td><?= $row['passing'] ?></td>
                          <td><?= $row['ball_control'] ?></td>
                          <td><?= $row['heading'] ?></td>
                          <td><?= $row['positioning'] ?></td>
                          <td><?= $row['ball_position'] ?></td>
                          <td><?= $row['transition_movement'] ?></td>
                          <td><?= $row['speed'] ?></td>
                          <td><?= $row['coordination'] ?></td>
                          <td><?= $row['agility'] ?></td>
                          <td><?= $row['confidence'] ?></td>
                          <td><?= $row['concentration'] ?></td>
                          <td><?= $row['fairplay'] ?></td>
                          <td><?= $row['attitude'] ?></td>

                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                  <input type="submit" class="btn btn-success" name="hitung" value="Lanjut" style="margin-bottom:10px;">
                </form>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->






<script type="text/javascript">
  function checkAll(centangall) {
    for (var i = 0; i < document.forms[centangall].elements.length; i++) {
      var e = document.forms[centangall].elements[i];
      if ((e.name != 'pilih') && (e.type == 'checkbox')) {
        e.checked = document.forms[centangall].allbox.checked;
      }
    }
  }
</script>