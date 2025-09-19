<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'spkmoora';
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
                          <td><?= $row['disiplin'] ?></td>
                          <td><?= $row['kerjasamatim'] ?></td>
                          <td><?= $row['sikapprofesional'] ?></td>
                          <td><?= $row['kreatifitas'] ?></td>
                          <td><?= $row['kinerja'] ?></td>
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