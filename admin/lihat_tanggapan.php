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
  <title>SB Admin 2 - Tables</title>
<!-- untuk mengarahkan atau mengalihkan link ke alamat tujuan yang diletakkan di bagian value-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head><!-- untuk menutup bagian kepala informasi tntng dokumen-->

<body id="page-top"> <!--pengaturan letak Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->

<!-- untuk menempatkan beberapa elemen menjadi satu bagian yang penggunaannya ditujukan untuk mempermudah aplikasi style dengan CSS  -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> <!--untuk membuat tabel-->
                  <thead>
                  <!--data yang akan ditampilkan di bagian atas tabel-->
                    <tr>
                    <th>ID Tanggapan</th>
                    <th>ID pengaduan</th>
                    <th>Tanggal Tanggapan</th>
                    <th>Tanggapan</th>
                    <th>ID Petugas</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>

                <?php
                require '../koneksi.php'; //menghubungkan ke koneksi
                 $sql=mysqli_query($koneksi,"select * from tanggapan");//untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD yang diambil dari pengaduan, menggunakan mysqli karena menggunakan php 7
                while ($data=mysqli_fetch_array($sql)) { //menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik

                  ?>
                  <!--untuk menghubungkan ke databse yang diambil dari data pengaduan-->
                  <tbody>
                    <tr>
                    <td><?php echo $data['id_tanggapan']; ?></td>
                    <td><?php echo $data['id_pengaduan']; ?></td>
                    <td><?php echo $data['tgl_tanggapan']; ?></td>
                    <td><?php echo $data['tanggapan']; ?></td>
                    <td><?php echo $data['id_petugas']; ?></td>
              
                      <td>
                        <!--button-->
                
                    <a href="delete_tanggapan.php?id=<?php echo $data['id_tanggapan']; ?>" class="btn btn-danger btn-circle"onclick="return confirm ('Yakin Mau Hapus?')">
                    <i class="fa fa-trash"></i>
                    </a>
                 


                      </td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
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

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
