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
                        <label class="col-sm-2 control-label">Disiplin </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="disiplin" min="0" step="1" max="100" placeholder="Masukkan nilai disiplin"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kerja Sama TIm </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="kerjasamatim" min="0" step="1" max="100" placeholder="Masukkan nilai kerjasamatim"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sikap Profesional </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="sikapprofesional" min="0" step="1" max="100" placeholder="Masukkan nilai sikapprofesional"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">kreatifitas </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="kreatifitas" min="0" step="1" max="100" placeholder="Masukkan nilai kreatifitas"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kinerja </label>
                        <div class="col-sm-12">
                          <input type="number" class="form-control" name="kinerja" min="0" step="1" max="100" placeholder="Masukkan nilai kinerja"required>
                        </div>
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