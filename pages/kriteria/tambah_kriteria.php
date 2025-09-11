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
              <h3 class="card-title">Tambah Kriteria</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-panel">
                <form class="form-horizontal style-form" method="POST" action="pages/kriteria/aksi_tambah.php">

                  <?php
                  include "./lib/koneksi.php";
                  $query  = "SELECT COUNT(id_kriteria) as jumlah FROM tabel_kriteria";
                  $result = $koneksi->query($query);
                  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $id = $row['jumlah'] + 1;

                  ?>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="hidden" class="form-control round-form" name="id_kriteria" value="<?= $id; ?>" readonly="readonly">
                      </div>
                    </div>
                  <?php } ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Kriteria</label>
                    <div class="col-md-12">
                      <input type="text" class="form-control round-form" name="kriteria" placeholder="Masukkan nama kriteria" required>
                    </div>
                  </div>
                  <?php
                  include "./lib/koneksi.php";
                  $auto = mysqli_query($koneksi, "SELECT kode from tabel_kriteria ORDER BY id_kriteria DESC limit 1");
                  $data = mysqli_fetch_array($auto);
                  // $urutan = (int)substr($data['kode'], 1, 1);
                  $urutan = explode("K", $data['kode']);
                  $urutan[1]++;
                  $kd_kat = "K" . $urutan[1];

                  ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kode</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control round-form" name="kode" value="<?= $kd_kat; ?>" readonly="readonly">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Type Kriteria</label>
                    <br>
                    <font size="2" ; style="margin-left: 9px; color: Grey" ;>Pilih Tipe Kriteria</font>
                    <div class="col-sm-12">
                      <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                          <input type="radio" class="form-check-input" id="radio1" name="type" value="benefit" checked required> Benefit
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                          <input type="radio" class="form-check-input" id="radio2" name="type" value="cost" required> Cost
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Bobot Kriteria</label>
                    <div class="col-sm-12">
                      <input type="number" name="bobot" class="form-control round-form" min="0" step="0.01" placeholder="Masukkan bobot kriteria (bobot < 1)" required>
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