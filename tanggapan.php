<!DOCTYPE html>
<html lang="en">    <!--memberi tahu browser bahwa semua konten di halaman tresebut adalah bahasa Inggris-->

<head>  <!--Tag untuk membuat informasi tentang dokumen-->
<!--Tag untuk membuat metadata tentang dokumen HTML-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- membuat judul dari sebuah halaman-->
    <title>APPEM</title>
    
  <!-- untuk mengarahkan atau mengalihkan link ke alamat tujuan yang diletakkan di bagian value-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head> <!-- untuk menutup bagian kepala informasi tntng dokumen-->

<body id="page-top">    <!--pengaturan letak Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->

<div class="card shadow">
    <div class="card-header">
        Detail Pengaduan <!--Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->
    </div>

    <div class="card-body"> 
    <div class="form-group cols-sm-6">
    <a href="?url=lihat_pengaduan" class="btn btn-primary btn-icon-split"> <!--link untuk menghubungkan ke id pengaduan-->
        <span class="icon text-white-50"> <!--warna -->
            <i class="fas fa-arrow-left"></i> <!--simbol-->
        </span>
        <span class="text">Kembali</span> <!--Tombol untuk kembali-->
</a>
    </a>
    </div>
    <div class="card-body"> 
        <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
        <?php
        include 'koneksi.php'; //menyambungkan ke data koneksi

        $sql = mysqli_query($koneksi,"SELECT * FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan='$_GET[id]' AND 
        tanggapan.id_pengaduan=pengaduan.id_pengaduan"); //untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan php 7
        $cek = mysqli_num_rows($sql); //untuk mengetahui berapa jumlah baris di dalam tabel database yang dipanggil oleh perintah mysql_query
            if ($cek<1) 
            {
                echo "<font color='red'>Mohon Tunggu, Data Belum Diproses</font>"; //peringatan jika data belum diproses dan berwarna merah
            }
            else
            {
                if ($data = mysqli_fetch_array($sql)) //menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik
            {
        ?>
        <div class="form-group cols-sm-6">
            <label>Tanggal Tanggapan</label> <!--  penamaan dari sebuah halaman untuk isi dari tanggal tanggapan  -->
            <input type="text" name="tgl_pengaduan" value="<?php echo $data ['tgl_tanggapan']; ?>"class="form-control"readonly><!-- untuk menghubungkan ke database agar sesuai dengan isinya ,fungsi readonly agar tanggal tidak dapat diubah secara sembarang  -->
        </div>
        <div class="form-group cols-sm-6">
            <label>Tulis Laporan</label> <!--penamaan dari sebuah halaman untuk isi dari Isi laporan-->
            <textarea class="form-control" rows="7" name="isi_laporan" readonly>
                <?php echo $data['isi_laporan']; ?>
            </textarea>
        </div>
        <div class="form-group cols-sm-6">
            <label>Tulis Tanggapan</label> <!--penamaan dari sebuah halaman untuk isi dari tulis tanggapan-->
            <textarea class="form-control" rows="7" name="isi_laporan" readonly>
                <?php echo $data['tanggapan']; ?>
            </textarea>
        </div>
        <?php }  } ?>
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