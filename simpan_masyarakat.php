<?php
require 'koneksi.php';	//menyambungkan ke data koneksi
$nik=$_POST['nik'];	//untuk memanggil data  yang telah diinputkan (nik) agar bisa ditampilkan di file action
$nama=$_POST['nama'];	//untuk memanggil data  yang telah diinputkan (nama) agar bisa ditampilkan di file action
$usser=$_POST['ussername'];	//untuk memanggil data  yang telah diinputkan (ussername) agar bisa ditampilkan di file action
$pass=$_POST['password'];	//untuk memanggil data  yang telah diinputkan (password) agar bisa ditampilkan di file action
$telp=$_POST['telp'];		//untuk memanggil data  yang telah diinputkan (telp) agar bisa ditampilkan di file action

$sql=mysqli_query($koneksi,"INSERT INTO masyarakat (nik,nama,ussername,password,telp)VALUES('$nik','$nama','$usser','$pass','$telp')");
if ($sql)	//untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan php 7
{
		?>
		<script type="text/javascript">
			alert ('Data Berhasil Disimpan,Silahkan Login'); 
			window.location="index.php";	//kembali ke halaman login
		</script>
<?php	
}
?>