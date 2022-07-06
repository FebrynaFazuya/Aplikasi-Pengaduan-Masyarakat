<?php
// koneksi database
include '../koneksi.php';
$nik = $_GET['nik'];
// menangkap data id yang di kirim dari url

 
 
// menghapus data dari database
$sql =mysqli_query($koneksi,"delete from masyarakat where nik='$nik'"); //untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan php 7

if ($sql) //untuk mengetes suatu kondisi 
  {
    ?>

<script type="text/javascript"> //untuk membungkus suatu perintah
alert ('Data Berhasil Dihapus'); //peringatan jika data berhasil dihapus
window.location='admin.php?url=lihat_masyarakat'; //kembali ke halaman lihat petugas
</script>

<?php
 }
?>