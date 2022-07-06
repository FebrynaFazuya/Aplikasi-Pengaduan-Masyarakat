<?php 
if(isset($_GET['url']))  //untuk memeriksa apakah suatu variabel sudah diatur atau belum
{
	$url=$_GET['url'];  //memanggil server atau link untuk diakses

	switch($url)
	{
		case 'tulis_pengaduan';
		include 'tulis_pengaduan.php';  //untuk memanggil data dari tulisa_pengaduan.php agar tampil di halaman masyarakat
		break;

		case 'lihat_pengaduan';
		include 'lihat_pengaduan.php';	//untuk memanggil data dari lihat_pengaduan.php agar tampil di halaman masyarakat
		break;

		case 	'detail_pengaduan';
		include 'detail_pengaduan.php';		//untuk memanggil data dari detail_pengaduan.php agar tampil di halaman masyarakat
		break;

		case 	'lihat_tanggapan';
		include 'lihat_tanggapan.php';		//untuk memanggil data dari lihat_tanggapan.php agar tampil di halaman masyarakat
		break;

		

	}
}
else
{
		

}
?>
<!--menggunakan  php lagi agar isi tidak ikut masuk ke halaman lain-->
<?php
if(isset($_GET['url']))
{
	$url=$_GET['url'];
	switch($url)
	{


	}
}
else
{
	
?>
		<br><br><h4><b>
		Selamat Datang Di Aplikasi Pengaduan Masyarakat yang dibuat untuk melaporkan masalah masalah yang sering ditemukan dalam bermasyarakat atau penyimpangan yang terjadi di sekitar anda.</h4><br>

		<h5>Masuknya era globalisasi seperti saat ini telah memperluas ruang informasi yang harus diberikan pemerintah kepada masyarakat. Dengan semakin terbukanya ruang informasi yang harus disediakan pemerintah, maka pola komunikasi dua arah antara pemerintah dan masyarakat harus tersusun melalui sebuah sistem yang baik. Hal ini dilakukan untuk meminimalisir gesekan akibat perbedaan pemahaman atas informasi yang tersampaikan</h5>

		<h5>Terbukanya ruang informasi tersebut juga berimplikasi pada transparansi pemerintah dalam membuat sebuah aturan atau kebijakan. Sementara itu, sebagai bentuk kepedulian masyarakat terhadap langkah-langkah yang diambil pemerintah, baik dalam bentuk pengawasan pelaksanaan kebijakan, maupun laporan masyarakat terhadap suatu tindak pelanggaran bisa disampaikan melalui layanan pengaduan.</h5>

		<h5>Proses selanjutnya dari pengelolaan pengaduan adalah menunggu tanggapan dari unit terkait yang diadukan oleh pelapor. Walaupun merupakan faktor eksternal yang berada di luar kendali bidang pengaduan, namun bukan berarti kita bisa berlepas tangan di sini. Jika ingin suatu kasus selesai dengan tuntas, maka bidang pengaduan harus proaktif melakukan pemantauan dan evaluasi. Untuk itu, diperlukan kerjasama dan koordinasi yang baik dengan seluruh Masyarakat, baik di lingkungan Kementerian maupun Pemerintah Daerah</h5>

		<h5>Ke depannya, secara internal diharapkan dukungan semua pihak terkait dan keseriusan pegawai di bidang pengaduan demi tercapainya keinginan untuk merespons dengan cepat semua pengaduan yang masuk, dan menuntaskan sisa-sisa pengaduan yang masih ada sejak dulu kala</h5>


		
		<?php 
}
?>
