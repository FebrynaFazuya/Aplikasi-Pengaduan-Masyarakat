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
  <title>Tulis Pengaduan</title>
   <!-- untuk mengarahkan atau mengalihkan link ke alamat tujuan yang diletakkan di bagian value-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head> <!-- untuk menutup bagian kepala informasi tntng dokumen-->

<body id="page-top"> <!--pengaturan letak Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->

<div class="card shadow">
<div class="card-header">
Tambah Petugas <!--Judul-->
</div>
<div class="card-body">
<form action="simpan_petugas.php" method="POST" class="form-horizontal" enctype="multipart/form-data" >
<div class="form-group cols-sm-6">
<label>Nama Petugas</label> <!--  penamaan dari sebuah halaman untuk isi dari nama  -->
<input type="text" name="nama_petugas" value="" class="form-control"><!-- untuk menghubungkan ke database agar sesuai dengan isinya ,fungsi readonly agar  tidak dapat diubah secara sembarang  -->
</div>

<div class="form-group cols-sm-6">
<label>Ussername</label> <!--  penamaan dari sebuah halaman untuk isi dari tanggal usser  -->
<input type="text" name="ussername" value="" class="form-control"><!-- untuk menghubungkan ke database agar sesuai dengan isinya ,fungsi readonly agar  tidak dapat diubah secara sembarang  -->
</div>

<div class="form-group cols-sm-6">
<label>Password</label> <!--  penamaan dari sebuah halaman untuk isi dari pass  -->
<input type="text" name="password" value="" class="form-control"><!-- untuk menghubungkan ke database agar sesuai dengan isinya ,fungsi readonly agar  tidak dapat diubah secara sembarang  -->
</div>

<div class="form-group cols-sm-6">
<label>No Telp</label> <!--  penamaan dari sebuah halaman untuk isi dari no telp  -->
<input type="text" name="telp" value="" class="form-control"><!-- untuk menghubungkan ke database agar sesuai dengan isinya ,fungsi readonly agar  tidak dapat diubah secara sembarang  -->
</div>
<!-- tombol untuk memilih lvel-->
<div class="form-group cols-sm-6">
<label>Level</label>
<select class="form-control" name="level">
<option>==Pilih==</option>
<option value="admin">Admin</option>
<option value="petugas">Petugas</option>
</select>
</div>


<div class="form-group cols-sm-6">
<input type="submit" value="simpan" class="btn btn-primary">
<input type="reset" value="kosongkan" class="btn btn-warning">
</div>
</form>

 <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
