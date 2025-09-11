<?php
include "./lib/koneksi.php";
$id_kriteria = $_GET['id_kriteria'];
$sql = "SELECT * FROM tabel_kriteria WHERE id_kriteria = $id_kriteria";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kriteria</h1>
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
                <h3 class="card-title">Update Kriteria</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="form-panel">
              <form class="form-horizontal style-form" method="POST" action="pages/kriteria/aksi_update.php?id_kriteria=<?=$row['id_kriteria']?>">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Kriteria</label>
                  <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nama Kriteria</font>
                  <div class="col-sm-12">
                    <input type="text" class="form-control round-form" name="kriteria" value="<?=$row['kriteria']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode</label>
                  <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Kode Kriteria</font>
                  <div class="col-sm-12">
                    <input type="text" class="form-control round-form" name="kode" value="<?=$row['kode']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Type Kriteria</label>
                  <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Tipe Kriteria</font>
                  <div class="col-sm-10">
                    <div class="form-check-inline">
                      <label class="form-check-label" for="radio1">
                        <?php 
                          if ($row['type']==='benefit') {
                        ?>
                            <input type="radio" class="form-check-input" id="radio1" name="type" value="benefit" checked> Benefit
                            <input type="radio" class="form-check-input" id="radio1" name="type" value="cost"> Cost
                         <?php
                          }else{
                          ?>
                            <input type="radio" class="form-check-input" id="radio1" name="type" value="benefit"> Benefit
                            <input type="radio" class="form-check-input" id="radio1" name="type" value="cost" checked> Cost
                        <?php
                          }
                         ?>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Bobot</label>
                  <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Bobot Kriteria</font>
                  <div class="col-sm-12">
                    <input type="number" name="bobot" class="form-control round-form" min="0" step="0.01" value="<?=$row['bobot']?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12" style="text-align: center;">
                    <button type="submit" class="btn btn-danger">Masukan</button>&nbsp;&nbsp;
                    <button type="button" class="btn btn-success" onclick="history.back();">Kembali</button>
                    <!-- <button type="button" class="btn btn-danger"><a href="index.php?module=list_kriteria">Kembali</a></button> -->
                  </div>
                </div>
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






