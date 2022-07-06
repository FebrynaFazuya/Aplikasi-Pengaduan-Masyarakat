<?php
require 'koneksi.php';	//menyambungkan ke data koneksi
$tgl=date('Y/m/d');	//untuk memanggil data  yang telah diinputkan (tanggal) agar bisa ditampilkan di file action dan sesuai dengan aktu real life
$nik=$_POST['nik'];	//untuk memanggil data  yang telah diinputkan (nik) agar bisa ditampilkan di file action
$isi=$_POST['isi_laporan'];	//untuk memanggil data  yang telah diinputkan (isi laporan) agar bisa ditampilkan di file action
$ft=$_FILES['foto']['name'];	//untuk memanggil data  yang telah diinputkan (foto) agar bisa ditampilkan di file action
$file=$_FILES['foto']['tmp_name'];	//agar foto dapat tersimpan di file
$st=0;

$sql=mysqli_query($koneksi,"INSERT INTO pengaduan (tgl_pengaduan,nik,isi_laporan,foto,status)VALUES('$tgl','$nik','$isi','$ft','$st')");	//untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan php 7
move_uploaded_file($file,"foto/".$ft);  //agar foto langsung berpindah ke file

if ($sql);
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan,Terimakasih Atas Menulis Laporan');
		window,location="masyarakat.php"

	</script>
	<?php
}
?>