<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Hasil Perhitungan</h1>
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
              <h3 class="card-title">Hasil Perhitungan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table id="tabel1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="text-align:center">Ranking</th>
                      <th style="text-align:center">Nama</th>
                      <th style="text-align:center">Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    include "./lib/koneksi.php";
                    $sql = "SELECT * FROM tabel_hasil WHERE tanggal = '$_GET[tanggal]'";
                    $result = mysqli_query($koneksi, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                      <tr class="gradeX">
                        <td style="text-align:center"><?php echo $no++; ?></td>
                        <td style="text-align:center"><?= $row['nama'] ?></td>
                        <td style="text-align:center"><?php echo number_format($row['nilai'], 3) ?></td>
                        </td>

                      </tr>
                    <?php

                    }
                    ?>
                  </tbody>
                </table>
                <?php
                if ($_SESSION['namauser'] == 'admin') {
                ?>
                  <div class="mb-3">
                    <a href="content.php?module=list_detail_siswa"><button class="btn btn-primary">Detail Perhitungan</button></a>
                  </div>
                <?php } ?>
                <button type="button" class="btn btn-success" onclick="history.back();">Kembali</button>
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