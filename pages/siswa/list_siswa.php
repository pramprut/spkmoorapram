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
               <h3 class="card-title">List Siswa</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <?php
                if ($_SESSION['namauser'] == 'admin') {
                ?>
                 <div class="mb-3">
                   <a href="content.php?module=tambah_siswa"><button class="btn btn-primary">Tambah Data</button></a>
                 </div>
               <?php
                }
                ?>
               <div class="table-responsive">
                 <table id="tabel1" class="table table-bordered table-striped">
                   <thead>
                     <tr>
                       <th style="text-align:center">No</th>
                       <th style="text-align:center">Nama</th>
                       <th style="text-align:center">K1</th>
                       <th style="text-align:center">K2</th>
                       <th style="text-align:center">K3</th>
                       <th style="text-align:center">K4</th>
                       <th style="text-align:center">K5</th>
                       <th style="text-align:center">K6</th>
                       <th style="text-align:center">K7</th>
                       <th style="text-align:center">K8</th>
                       <th style="text-align:center">K9</th>
                       <th style="text-align:center">K10</th>
                       <th style="text-align:center">K11</th>
                       <th style="text-align:center">K12</th>
                       <th style="text-align:center">K13</th>
                       <th style="text-align:center">K14</th>
                       <th style="text-align:center">K15</th>

                       <!-- <?php
                            include "./lib/koneksi.php";
                            $sqlNamakriteria = "SELECT * FROM tabel_kriteria ORDER BY id_kriteria ASC";
                            $resultNamaKriteria = mysqli_query($koneksi, $sqlNamakriteria);
                            while ($hasilNamaKriteria = mysqli_fetch_assoc($resultNamaKriteria)) {
                            ?>
                                  <th><?= $hasilNamaKriteria['kriteria'] ?></th>
                      <?php
                            }
                      ?> -->
                       <?php
                        if ($_SESSION['namauser'] == 'admin') {
                        ?>
                         <th style="text-align:center">Aksi</th>
                       <?php
                        }
                        ?>
                     </tr>
                   </thead>
                   <tbody>
                     <?php
                      $no = 1;
                      $sql = "SELECT * FROM tabel_siswa";
                      $result = mysqli_query($koneksi, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                       <tr class="gradeX">
                         <!-- <td><?= $row['id_siswa'] ?></td> -->
                         <td style="text-align:center"><?php echo $no++; ?></td>
                         <td style="text-align:center"><?= $row['nama'] ?></td>
                         <td style="text-align:center"><?= $row['shooting'] ?></td>
                         <td style="text-align:center"><?= $row['dribbling'] ?></td>
                         <td style="text-align:center"><?= $row['passing'] ?></td>
                         <td style="text-align:center"><?= $row['ball_control'] ?></td>
                         <td style="text-align:center"><?= $row['heading'] ?></td>
                         <td style="text-align:center"><?= $row['positioning'] ?></td>
                         <td style="text-align:center"><?= $row['ball_position'] ?></td>
                         <td style="text-align:center"><?= $row['transition_movement'] ?></td>
                         <td style="text-align:center"><?= $row['speed'] ?></td>
                         <td style="text-align:center"><?= $row['coordination'] ?></td>
                         <td style="text-align:center"><?= $row['agility'] ?></td>
                         <td style="text-align:center"><?= $row['confidence'] ?></td>
                         <td style="text-align:center"><?= $row['concentration'] ?></td>
                         <td style="text-align:center"><?= $row['fairplay'] ?></td>
                         <td style="text-align:center"><?= $row['attitude'] ?></td>
                         <?php
                          if ($_SESSION['namauser'] == 'admin') {
                          ?>
                           <td class="hidden-phone" style="text-align:center">
                             <a href="content.php?module=update_siswa&id_siswa=<?= $row['id_siswa'] ?>"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;<br>

                             <a href="content.php?module=hapus_siswa&id_siswa=<?= $row['id_siswa'] ?>" onclick="return confirm('YAKIN HAPUS DATA?')"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                           </td>
                         <?php
                          }
                          ?>
                       </tr>
                     <?php
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