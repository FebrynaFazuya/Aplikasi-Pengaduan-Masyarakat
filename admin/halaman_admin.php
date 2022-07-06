<?php
if(isset($_GET['url'])) //untuk memeriksa apakah suatu variabel sudah diatur atau belum
{
	$url=$_GET['url']; //memanggil server atau link untuk diakses

	switch($url)
	{
		//untuk memanggil data dari file php agar tampil di halaman masyarakat
		case 'verivikasi_pengaduan';
		include 'verivikasi_pengaduan.php'; 
		break;

		case 'detail_pengaduan';
		include 'detail_pengaduan.php';
		break;

		case 	'tanggapan';
		include 'tanggapan.php';
		break;

		case 	'lihat_petugas';
		include 'lihat_petugas.php';
		break;

		case 	'tambah_petugas';
		include 'tambah_petugas.php';
		break;

		case 	'edit_petugas';
		include 'edit_petugas.php';
		break;

		case 	'lihat_masyarakat';
		include 'lihat_masyarakat.php';
		break;

		case 	'preview_masyarakat';
		include 'preview_masyarakat.php';
		break;

		case 	'preview_petugas';
		include 'preview_petugas.php';
		break;

		case 	'lihat_laporan';
		include 'lihat_laporan.php';
		break;

		case 	'lihat_tanggapan';
		include 'lihat_tanggapan.php';
		break;

		case 	'preview_pengaduan';
		include 'preview_pengaduan.php';
		break;

		case 	'preview_tanggapan';
		include 'preview_tanggapan.php';
		break;


	}
}
else
{
		//Isi dari dashboard halaman admin

		?> 
		<h3>Selamat Datang Admin<br>
		<h3>Silahkan Untuk Mengecek & Menanggapi Pengaduan Yang Telah Disampaikan</h3>
		<h4>Anda Login Sebagai	:	<h4><b><?php echo $_SESSION['nama'];


require '../koneksi.php';
		$sql = mysqli_query($koneksi,"select * from pengaduan where status='proses'"); //untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan mysql7
		if ($cek = mysqli_num_rows($sql)) //untuk mengetahui berapa jumlah baris di dalam tabel database yang dipanggil oleh perintah mysql_query
		{

		?>
		<br>
		<br>
		
		 <div class="col-xl-8 col-md-4 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan :</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan dari masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-3x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
} }
?>