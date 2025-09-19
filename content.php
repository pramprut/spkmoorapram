<?php
session_start();

if ($_SESSION['level'] == "") {
  header("location:login.html?login_dahulu");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPK Puri Surya Jaya</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


      <!-- Right navbar links -->

      <ul class="navbar-nav ml-auto">
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <a href="logout.php" class="btn btn-primary btn-md">Logout</a>
          </ul>
        </div>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SPK - MOORA</span>
      </a>

      <!-- Sidebar -->
      <div id="sidebar" class="nav-collapse">
        <?php
        if ($_SESSION['namauser'] == 'admin') {
        ?>
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Admin</a>
            </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="content.php?module=home" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Data Kriteria
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="content.php?module=list_kriteria" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Kriteria</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="content.php?module=sub_kriteria" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Bobot Kriteria</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Data Siswa
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="content.php?module=list_siswa" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Siswa</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="content.php?module=list_hasil" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Hasil</p>
                </a>
              </li>

            </ul>

          <?php
        } elseif ($_SESSION['namauser'] == 'user') {
          ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">Kepsek / Pelatih</a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="content.php?module=home" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Data Kriteria
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="content.php?module=list_kriteria" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Kriteria</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="content.php?module=sub_kriteria" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Bobot Kriteria</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                      Data Siswa
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="content.php?module=list_siswa" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Siswa</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                      Perhitungan
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="content.php?module=pilih_siswa" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Analisa Perhitungan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="content.php?module=list_hasil" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Hasil</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>


            <?php
          }
            ?>
            </nav>
            <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <?php

            if ($_GET['module'] == 'home') {
              include "pages/home/home.php";
            }
            //list kriteria
            elseif ($_GET['module'] == 'list_kriteria') {
              include "pages/kriteria/list_kriteria.php";
            }
            //tambah kriteria
            elseif ($_GET['module'] == 'tambah_kriteria') {
              include "pages/kriteria/tambah_kriteria.php";
            }
            //update kriteria
            elseif ($_GET['module'] == 'update_kriteria') {
              include "pages/kriteria/update_kriteria.php";
            }
            //hapus kriteria
            elseif ($_GET['module'] == 'hapus_kriteria') {
              include "pages/kriteria/aksi_hapus.php";
            }
            //sub kriteria
            elseif ($_GET['module'] == 'sub_kriteria') {
              include "pages/kriteria/sub_kriteria.php";
            }

            //sub kriteria update
            elseif ($_GET['module'] == 'update_sub') {
              include "pages/kriteria/update_sub.php";
            }

            //sub kriteria tambah
            elseif ($_GET['module'] == 'tambah_sub') {
              include "pages/kriteria/tambah_sub.php";
            }

            //sub kriteria hapus
            elseif ($_GET['module'] == 'hapus_sub') {
              include "pages/kriteria/aksi_hapussub.php";
            }

            //list siswa
            elseif ($_GET['module'] == 'list_siswa') {
              include "pages/siswa/list_siswa.php";
            }
            //tambah siswa
            elseif ($_GET['module'] == 'tambah_siswa') {
              include "pages/siswa/tambah_siswa.php";
            }
            //update siswa
            elseif ($_GET['module'] == 'update_siswa') {
              include "pages/siswa/update_siswa.php";
            }
            //hapus siswa
            elseif ($_GET['module'] == 'hapus_siswa') {
              include "pages/siswa/aksi_hapus.php";
            }
            //hapus semua siswa
            elseif ($_GET['module'] == 'hapus_semua_siswa') {
              include "pages/siswa/aksi_hapus_semua.php";
            }
            //list hasil
            elseif ($_GET['module'] == 'list_hasil') {
              include "pages/hasil/list_hasil.php";
            }
            //hitung
            elseif ($_GET['module'] == 'hitung') {
              include "pages/hasil/hitung.php";
            }
            //pilih siswa
            elseif ($_GET['module'] == 'pilih_siswa') {
              include "pages/hasil/pilih_siswa.php";
            }

            //detail siswa
            elseif ($_GET['module'] == 'list_detail_siswa') {
              include "pages/hasil/list_siswa.php";
            }
            //detail siswa
            elseif ($_GET['module'] == 'list_detail_hasil') {
              include "pages/hasil/list_detail_hasil.php";
            }
            //hapus hasil
            elseif ($_GET['module'] == 'hapus_hasil') {
              include "pages/hasil/aksi_hapus.php";
            }
            //hapus hasil siswa
            elseif ($_GET['module'] == 'hapus_hasil_siswa') {
              include "pages/hasil/aksi_hapus_hasil_siswa.php";
            }


            //default
            elseif ($_GET['module'] == 'pilih_siswa') {
              include "pages/hasil/pilih_siswa.php";
            }
            ?>
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <footer class="main-footer">
      <strong>Copyright &copy; <a href="#">SPK Puri Surya Jaya</a>.</strong>
      All rights reserved.
    </footer>
  </div>

  </div>

  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>