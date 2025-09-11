 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Bobot Kriteria</h1>
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
               <h3 class="card-title">List Bobot Kriteria</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <?php
                if ($_SESSION['namauser'] == 'admin') {
                ?>
                 <div class="mb-3">
                   <a href="content.php?module=tambah_sub"><button class="btn btn-primary">Tambah Data</button></a>
                 </div>
               <?php
                }
                ?>
               <div class="table-responsive">
                 <table id="tabel1" class="table table-bordered table-striped">
                   <thead>
                     <tr>
                       <th>No</th>
                       <th style="text-align:center">Skala Sub Kriteria</th>
                       <th style="text-align:center">Bobot Sub Kriteria</th>
                       <th style="text-align:center">Keterangan</th>
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
                      include "./lib/koneksi.php";
                      $query  = "SELECT * FROM sub_kriteria";
                      $result = $koneksi->query($query);
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>

                       <tr class="gradeX">
                         <td style="text-align:center"><?php echo $no++; ?></td>
                         <td style="text-align:center"><?= $row['skala_sub'] ?></td>
                         <td style="text-align:center"><?= $row['nilai_bobotsub'] ?></td>
                         <td style="text-align:center"><?= $row['keterangan_sub'] ?></td>
                         <?php
                          if ($_SESSION['namauser'] == 'admin') {
                          ?>
                           <td class="hidden-phone">
                             <a href="content.php?module=update_sub&id_sub=<?= $row['id_sub'] ?>"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i>Edit</button>&nbsp;&nbsp;</a>

                             <a href="content.php?module=hapus_sub&id_sub=<?= $row['id_sub'] ?>" onclick="return confirm('YAKIN HAPUS DATA?')"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button></a>
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