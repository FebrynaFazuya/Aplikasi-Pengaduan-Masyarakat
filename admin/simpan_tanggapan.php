<?php
require '../koneksi.php';//menyambungkan ke data koneksi
//untuk memanggil data  yang telah diinputkan agar bisa ditampilkan di file action
$id_pengaduan=$_POST['id_pengaduan'];
$tgl=$_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$st='selesai';

 //untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan php 7
$sql=mysqli_query($koneksi,"INSERT INTO tanggapan (id_pengaduan,tgl_tanggapan,tanggapan,id_petugas)VALUES('$id_pengaduan','$tgl','$tanggapan','$id_petugas')");
$update_st=mysqli_query($koneksi,"update pengaduan set status='$st' where id_pengaduan='$id_pengaduan' ");

if ($sql) //untuk mengetes suatu kondisi 
{
	?>
	<script type="text/javascript"> //untuk membungkus suatu perintah
		alert ('Data Sudah Dilengkapi'); //peringatan jika data berhasil disimpan
		window.location="admin.php?url=verivikasi_pengaduan";  //kembali ke halaman lihat petugas

	</script>
	<?php
}
?>
