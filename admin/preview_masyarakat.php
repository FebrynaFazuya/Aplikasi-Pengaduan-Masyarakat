 <!DOCTYPE html>
<html lang="en"> <!--memberi tahu browser bahwa semua konten di halaman tresebut adalah bahasa Inggris-->

<head> <!--Tag untuk membuat informasi tentang dokumen-->
<!--Tag untuk membuat metadata tentang dokumen HTML-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- membuat judul dari sebuah halaman-->
  <title>Preview Masyarakat</title>
<!-- untuk mengarahkan atau mengalihkan link ke alamat tujuan yang diletakkan di bagian value-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  </head> <!-- untuk menutup bagian kepala informasi tntng dokumen-->
<!--pengaturan letak Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->
  <body id="page-top">
  <button id="page-top">
<!--untuk mencetak data pda printer -->
  <button type="button" class="btn btn-warning" onclick="frames['frame'].print(); ">
  <i class="fa fa-print"></i>
  Cetak Data
  </button>
  <iframe src="cetak_masyarakat.php" name="frame" width="100%" height="600" frameborder="0"></iframe>
    </body>
  </html>