<!DOCTYPE html>
<html lang="en"><!--memberi tahu browser bahwa semua konten di halaman tresebut adalah bahasa Inggris-->

<head><!--Tag untuk membuat informasi tentang dokumen-->
<!--Tag untuk membuat metadata tentang dokumen HTML-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- membuat judul dari sebuah halaman-->
  <title>Detail Pengaduan</title>
   <!-- untuk mengarahkan atau mengalihkan link ke alamat tujuan yang diletakkan di bagian value-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head> <!-- untuk menutup bagian kepala informasi tntng dokumen-->

<body id="page-top"> <!--pengaturan letak Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->
<!--  Jdul-->
<div class="card shadow">
<div class="card-header">
Tanggapan
</div>

  
<div class="card-body">
<div class="form-group cols-sm-6">
<a href ="?url=verivikasi_pengaduan" class="btn btn-success btn-icon-split">
<span class="icon text-white-50">
<i class="fas fa-arrow-left"></i>
</span>
<span class="text">Kembali</span>
</a>


</div>

<form action="simpan_tanggapan.php" method="POST" class="form-horizontal" enctype="multipart/form-data" >

<div class="form-group cols-sm-6">
<label>ID Pengaduan</label> <!--  penamaan dari sebuah halaman untuk isi dari id pengaduan -->
<input type="text" name="id_pengaduan" value="<?php echo $_GET['id']; ?>"class="form-control"readonly>
</div>

<div class="form-group cols-sm-6">
<label>Tanggal Tanggapan</label><!--  penamaan dari sebuah halaman untuk isi tanggal tnggpn  -->
<input type="text" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>"class="form-control"readonly>
</div>

<div class="form-group cols-sm-6">
<label>Tulis Tanggapan</label><!--  penamaan dari sebuah halaman untuk isi dari tulis tanggapan  -->
<textarea class="form-control" rows="7" name="tanggapan">

</textarea>
</div>
<div class="form-group cols-sm-6">
<label>ID Petugas</label><!--  penamaan dari sebuah halaman untuk isi dari id petugas  -->
<input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control"readonly>
</div>

<input type="submit" class="btn btn-primary btn-user" value="Tanggapi!">


</form>

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
