<?php
include "./lib/koneksi.php";
$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM tabel_siswa WHERE id_siswa = $id_siswa";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

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
              <h3 class="card-title">Update Siswa</h3>
              </div>
              <div class="card-body">
              <div class="form-panel">

  <form class="form-horizontal style-form" method="POST" action="pages/siswa/aksi_edit.php?id_siswa=<?=$id_siswa?>">
  
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nama Siswa</font>
          <div class="col-sm-12">
            <input type="text" class="form-control round-form" name="nama" value="<?=$row['nama']?>">
          </div>
        </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Disiplin </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Disiplin</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="disiplin" min="0" step="1" max="100" value="<?=$row['disiplin']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Kerja Sama Tim </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Kerja Sama Tim</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="kerjasamatim" min="0" step="1" max="100" value="<?=$row['kerjasamatim']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Sikap Profesional </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Sikap Profesional</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="sikapprofesional" min="0" step="1" max="100" value="<?=$row['sikapprofesional']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Kreatifitas </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Kreatifitas</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="kreatifitas" min="0" step="1" max="100" value="<?=$row['kreatifitas']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Kinerja </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Kinerja</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="kinerja" min="0" step="1" max="100" value="<?=$row['kinerja']?>">
          </div>
      </div>
      
    </div>
    
  </div>

  </form>

       </div>
            <!-- /.card -->
          </section>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->








