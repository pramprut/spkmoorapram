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
          <label class="col-sm-2 col-sm-2 control-label">Shooting </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Shooting</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="shooting" min="0" step="1" max="100" value="<?=$row['shooting']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Dribbling </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Dribbling</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="dribbling" min="0" step="1" max="100" value="<?=$row['dribbling']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Passing </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Passing</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="passing" min="0" step="1" max="100" value="<?=$row['passing']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Ball Control </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Ball Control</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="ball_control" min="0" step="1" max="100" value="<?=$row['ball_control']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Heading </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Heading</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="heading" min="0" step="1" max="100" value="<?=$row['heading']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Positioning </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Positioning</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="positioning" min="0" step="1" max="100" value="<?=$row['positioning']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Ball Position </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Ball Position</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="ball_position" min="0" step="1" max="100" value="<?=$row['ball_position']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Transition Movement </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Transition Movement</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="transition_movement" min="0" step="1" max="100" value="<?=$row['transition_movement']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Speed </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Speed</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="speed" min="0" step="1" max="100" value="<?=$row['speed']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Coordination </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Coordination</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="coordination" min="0" step="1" max="100" value="<?=$row['coordination']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Agility </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Agility</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="agility" min="0" step="1" max="100" value="<?=$row['agility']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Confidence </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Confidence</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="confidence" min="0" step="1" max="100" value="<?=$row['confidence']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Concentration </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Concentration</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="concentration" min="0" step="1" max="100" value="<?=$row['concentration']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Fairplay </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Fairplay</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="fairplay" min="0" step="1" max="100" value="<?=$row['fairplay']?>">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Attitude </label>
          <br><font size="2"; style="margin-left: 9px; color: Grey";>Edit Nilai Attitude</font>
          <div class="col-sm-12">
            <input type="number" class="form-control round-form" name="attitude" min="0" step="1" max="100" value="<?=$row['attitude']?>">
          </div>
      </div>
        <div class="form-group">
          <div class="col-sm-12" style="text-align: center;">
            <button type="submit" class="btn btn-danger">Masukan</button>
            <button type="button" class="btn btn-success" onclick="history.back();">Kembali</button>
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








