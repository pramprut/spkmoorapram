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
               <h3 class="card-title">Tambah Bobot Kriteria</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <div class="form-panel">
                 <form class="form-horizontal style-form" method="POST" action="pages/kriteria/aksi_tambahsub.php">
                   <div class="form-group">
                     <label class="col-sm-2 col-sm-2 control-label">Skala Sub Kriteria</label>
                     <div class="col-sm-12">
                       <input type="text" class="form-control round-form" name="skala_sub" placeholder="Masukkan skala sub kriteria" required>
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="col-sm-2 col-sm-2 control-label">Bobot</label>
                     <div class="col-sm-12">
                       <input type="number" class="form-control round-form" name="nilai_bobotsub" min="0.1" step="0.1" placeholder="Masukkan bobot sub kriteria" required>
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                     <div class="col-sm-12">
                       <input type="text" class="form-control round-form" name="keterangan_sub" placeholder="Masukkan keterangan sub kriteria" required>
                     </div>
                   </div>
                   <div class="form-group">
                     <div class="col-sm-12" style="text-align: center;">
                       <button type="submit" class="btn btn-danger">Simpan</button>&nbsp;&nbsp;
                       <button type="button" class="btn btn-success" onclick="history.back();">Kembali</button>
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