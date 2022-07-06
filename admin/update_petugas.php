<?php
require '../koneksi.php';//menyambungkan ke data koneksi
//untuk memanggil data  yang telah diinputkan agar bisa ditampilkan di file action
$nama=$_POST['nama_petugas'];
$usser=$_POST['ussername'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];
$id=$_POST['id_petugas'];

$sql=mysqli_query($koneksi,"update petugas set nama_petugas='$nama',ussername='$usser',password='$pass',telp='$telp',level='$level' where id_petugas='$id'"); //untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan php 7
	
	if($sql) //untuk mengetes suatu kondisi 
	{
?>
<script type="text/javascript"> //untuk membungkus suatu perintah
	alert ('Data Berhasil Diubah'); //peringatan jika data berhasil disimpan
	window.location='admin.php?url=lihat_petugas'; //kembali ke halaman lihat petugas
</script>
<?php
}
?>