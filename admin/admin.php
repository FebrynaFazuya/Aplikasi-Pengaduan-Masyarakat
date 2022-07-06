<?php
session_start(); //untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser
if(!isset($_SESSION['nama'])) //sebuah inisialisasi dari session Nama
  {
die("Anda Belum Login"); //mencetak pesan keluar
  }
  if($_SESSION['level']!="admin") //mengetahui level  login untuk admin dam masuk ke halaman admin
  {
    die("anda bukan admin"); //mencetak pesan keluar/peringatan
  }
?>

<!DOCTYPE html>
<html lang="en">  <!--memberi tahu browser bahwa semua konten di halaman tresebut adalah bahasa Inggris-->

<head>  <!--Tag untuk membuat informasi tentang dokumen-->
<!--Tag untuk membuat metadata tentang dokumen HTML-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- membuat judul dari sebuah halaman-->
  <title>Admin</title>

  <!-- untuk mengarahkan atau mengalihkan link ke alamat tujuan yang diletakkan di bagian value-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head> <!-- untuk menutup bagian kepala informasi tntng dokumen-->

<body id="page-top"> <!--pengaturan letak Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15"> <!--warna background sidebar-->
          <i class="fas fa-keyboard"></i> <!--simbol-->
        </div>
        <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat <sup></sup></div> <!--judul dari sidebar-->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i> <!--simbol-->
          <span>Dashboard</span></a> <!--isi dari halaman admin -->
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="?url=verivikasi_pengaduan"> <!--link untuk menuju ke verivikasi pengaduan-->
          <i class="fas fa-check"></i>    <!--simbol-->
          <span>Verivikasi Pengaduan</span></a> <!--tombol di dalam sidebar untuk menuju ke verivikasi pengaduan-->
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>DATA</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="?url=lihat_petugas">Data Petugas</a> <!--link untuk menghubungkan ke data petugas-->
            <a class="collapse-item" href="?url=lihat_masyarakat">Data Masyarakat</a> <!--link untuk menghubungkan ke data masyarakat-->
            <a class="collapse-item" href="?url=lihat_laporan">Data Laporan</a> <!--link untuk menghubungkan ke data laporan-->
            <a class="collapse-item" href="?url=lihat_tanggapan">Data Tanggapan</a> <!--link untuk menghubungkan ke data tangapan-->

          </div>
        </div>
      </li>

         <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-print"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="?url=preview_petugas">Laporan Petugas</a> <!--link untuk menghubungkan ke laporan petugas-->
            <a class="collapse-item" href="?url=preview_masyarakat">Laporan Masyarakat</a><!--link untuk menghubungkan ke laporan masyarakat-->
            <a class="collapse-item" href="?url=preview_pengaduan">Laporan Pengaduan</a> <!--link untuk menghubungkan ke laporan pengaduan-->
            <a class="collapse-item" href="?url=preview_tanggapan">Laporan Tanggapan</a> <!--link untuk menghubungkan laporan taggapan-->

          </div>
        </div>
      </li>

 <li class="nav-item">
        <a class="nav-link" href="help3.html" target="_blank">  <!--link untuk menuju ke lihat pengaduan-->
          <i class="fas fa-search"></i>    <!--simbol-->
          <span>HELP</span></a>    <!--tombol di dalam sidebar untuk menuju ke lihat pengaduan-->
      </li>
      <!-- Divider -->
      <li class="nav-item">
        <a class="nav-link" href="../logout.php"><!--link untuk keluar-->
          <i class="fas fa-sign-out-alt"></i><!--simbol-->
          <span>Sign Out</span></a> <!--tulisan untuk tombol keluar-->
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <h1>Aplikasi Pelaporan Pengaduan Masyarakat</h1>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
        <?php include 'halaman_admin.php'; ?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; FEBRYNA FAZUYA UKK 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
