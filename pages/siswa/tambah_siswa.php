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
              <h3 class="card-title">Tambah Siswa</h3>
              </div>

              <div class="card-body">
              <div class="form-panel">
              <form class="form-horizontal style-form" method="POST" action="pages/siswa/aksi_tambah.php">
                  <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Siswa</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control round-form" name="nama" placeholder="Masukkan nama siswa"required>
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Shooting </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="shooting" min="0" step="1" max="100" placeholder="Masukkan nilai shooting"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dribbling </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="dribbling" min="0" step="1" max="100" placeholder="Masukkan nilai dribbling"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Passing </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="passing" min="0" step="1" max="100" placeholder="Masukkan nilai passing"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ball Control </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="ball_control" min="0" step="1" max="100" placeholder="Masukkan nilai ball control"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Heading </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="heading" min="0" step="1" max="100" placeholder="Masukkan nilai heading"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Positioning </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="positioning" min="0" step="1" max="100" placeholder="Masukkan nilai positioning"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ball Position </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="ball_position" min="0" step="1" max="100" placeholder="Masukkan nilai ball position"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Transition Movement </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="transition_movement" min="0" step="1" max="100" placeholder="Masukkan nilai transition movement"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Speed </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="speed" min="0" step="1" max="100" placeholder="Masukkan nilai speed"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Coordination </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="coordination" min="0" step="1" max="100" placeholder="Masukkan nilai coordination"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Agility </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="agility" min="0" step="1" max="100" placeholder="Masukkan nilai agility"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Confidence </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="confidence" min="0" step="1" max="100" placeholder="Masukkan nilai confidence"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Concentration </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="concentration" min="0" step="1" max="100" placeholder="Masukkan nilai concentration"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fairplay </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="fairplay" min="0" step="1" max="100" placeholder="Masukkan nilai fairplay"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Attitude </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="attitude" min="0" step="1" max="100" placeholder="Masukkan nilai attitude"required>
                        </div>
                    </div>

                      
                      <div class="form-group">
                        <div class="col-sm-12" style="text-align: center;">
                          <button type="submit" class="btn btn-danger">Masukan</button>&nbsp;&nbsp;
                          <button type="button" class="btn btn-success" onclick="history.back();">Kembali</button>
                          <!-- <button type="reset" class="btn btn-theme04">Reset</button> -->
                        </div>
                      </div>
                  
                  
               

                </form>
              </div>
       </div>
            <!-- /.card -->
          </section>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->