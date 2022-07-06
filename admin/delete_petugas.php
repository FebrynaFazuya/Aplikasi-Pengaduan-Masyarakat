<?php
require '../koneksi.php'; //menyambungkan ke data koneksi
$id=$_GET['id']; //mengambil nilai id yang tersimpan di server database

  $sql = mysqli_query($koneksi,"delete from petugas where id_petugas='$id'"); //untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan php 7

  if ($sql) //untuk mengetes suatu kondisi 
  {
  	?>
  	<script type="text/javascript"> //untuk membungkus suatu perintah
  		alert ('Data Berhasil Dihapus'); //peringatan jika data berhasil dihapus
  		window.location='admin.php?url=lihat_petugas'; //kembali ke halaman lihat petugas

  	</script>

<?php
  }
  ?>