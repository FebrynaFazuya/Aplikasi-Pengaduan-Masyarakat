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
  <title>verivikasi Pengaduan</title>
<!-- untuk mengarahkan atau mengalihkan link ke alamat tujuan yang diletakkan di bagian value-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head> <!-- untuk menutup bagian kepala informasi tntng dokumen-->

<body id="page-top"> <!--pengaturan letak Isi dari sebuah dokumen HTML yang akan ditampilkan pada halaman berada di bagian atas-->

  <!--Judul Untuk Halaman pengaduan-->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Pengaduan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">   <!--Untuk Membuat Tabel-->

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <!--isi untuk tabel -->
                    <tr>
                      <th>ID</th>
                      <th>Tanggal</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                <?php
                require '../koneksi.php'; //menyambungkan ke data koneksi
                 $sql=mysqli_query($koneksi,"select *from pengaduan where status='0'"); //untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan mysql7
                while ($data=mysqli_fetch_array($sql)) { //menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik

                  ?>

                  <tbody>
                  <!--menghubungkan ke database -->
                    <tr>
                      <td><?php echo $data ['id_pengaduan']; ?></td>
                      <td><?php echo $data ['tgl_pengaduan']; ?></td>
                      <td><?php echo $data ['nik']; ?></td>
                      <td><?php echo $data ['isi_laporan']; ?></td>
                      <td><?php echo $data ['foto']; ?></td>
                      <td><?php echo $data ['status']; ?></td>
                      <td>
                        <!--button-->
                  <a href="?url=detail_pengaduan&id=<?php echo $data['id_pengaduan'];
                  ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Detail & Verivikasi</span>
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

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
