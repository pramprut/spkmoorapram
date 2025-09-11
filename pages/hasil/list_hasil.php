 <!-- Content Wrapper. Contains page content -->
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
                <h3 class="card-title">List Hasil Perhitungan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tabel1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Tanggal Perhitungan</th>
                        <th>Jumlah Siswa</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                   <?php
                      
                      include "./lib/koneksi.php";
                      $sql = "SELECT tanggal,count(nama) as Jsiswa FROM tabel_hasil GROUP BY tanggal";
            /*          date_default_timezone_set('Asia/Jakarta');
                      echo date('d-m-Y H:i:s'); // Hasil: 20-01-2017 05:32:15*/
                      $result = mysqli_query($koneksi, $sql);
                      $tanda = 1;
                          while ($row = mysqli_fetch_assoc($result)) {
                              
                      ?>
                      <tr class="gradeX">
                      <td><?=$row['tanggal']?></td>
                      <td><?=$row['Jsiswa']?></td>        
                      <td>
                      <a href="content.php?module=list_detail_hasil&&tanggal=<?=$row['tanggal']?>"><button type="button" class="btn btn-primary">Lihat</button></a>&nbsp;&nbsp;
                      <?php
                          if($_SESSION['namauser']=='admin'){
                      ?>
                      <a href="content.php?module=hapus_hasil&&tanggal=<?=$row['tanggal']?>" onclick="return confirm('YAKIN HAPUS DATA?')" ><button type="button" class="btn btn-danger">Hapus</button></a>
                      <?php
                        }
                    ?>
                      </td>
                      </tr>
                    <?php
                          $tanda++;
                        }
                    ?>
                    </tbody>
                  </table>
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
  <!-- /.content-wrapper -->


