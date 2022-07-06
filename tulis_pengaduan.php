<!DOCTYPE html> 
<html lang="en">  <!--memberi tahu browser bahwa semua konten di halaman tresebut adalah bahasa Inggris-->

<head> <!--Tag untuk membuat informasi tentang dokumen-->
<!--Tag untuk membuat metadata tentang dokumen HTML-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- membuat judul dari sebuah halaman-->
  <title>Data Pokok</title>

  <!-- untuk mengarahkan atau mengalihkan link ke alamat tujuan yang diletakkan di bagian value-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head> <!-- untuk menutup bagian kepala informasi tntng dokumen-->

<body id="page-top"> <!--pengaturan letak Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->
<!-- untuk menempatkan beberapa elemen menjadi satu bagian yang penggunaannya ditujukan untuk mempermudah aplikasi style dengan CSS  -->
<div class="card shadow">
<div class="card-header">
Data Pokok  <!--Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->
</div>
<div class="card-body">
<form action="simpan_pengaduan.php" method="POST" class="form-horizontal" enctype="multipart/form-data" >


<div class="form-group cols-sm-6">
<label>Nama</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Pangkat</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>NRP</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Tempat Tanggal Lahir</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Tmt TNI</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Kategori</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>TMT</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Suku bangsa</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Agama</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Golongan darah</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Sumber PA</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Tmt</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>


<div class="form-group cols-sm-6">
<label>Jabatan</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Tmt Jab</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Satuan</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Psi</label> <!--  penamaan dari sebuah halaman untuk isi dari nik  -->
<input type="text" name="" value=""class="form-control">
</div>

<div class="form-group cols-sm-6">
<label>Unggah Foto</label> <!--  penamaan dari sebuah halaman untuk isi dari isi foto  -->
<input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png, .gif"><font color ="red">
*tipe yang bisa di upload adalah : .jpg, .jpeg, .png, .gif, </font>
</div>

<div class="form-group cols-sm-6">
<input type="submit" value="simpan" class="btn btn-primary"> <!--  untuk menyimpan data-->
<input type="reset" value="kosongkan" class="btn btn-warning"> <!-- untuk mengkosongkan data-->
</div>
</form>

 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
