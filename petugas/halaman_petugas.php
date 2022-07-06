<?php
if(isset($_GET['url'])) //untuk memeriksa apakah suatu variabel sudah diatur atau belum
{
	$url=$_GET['url']; //memanggil server atau link untuk diakses

	switch($url)
	{
			
		//untuk memanggil data dari file php agar tampil di halaman masyarakat
		case 	'verivikasi_pengaduan';
		include 'verivikasi_pengaduan.php';
		break;

		case 	'detail_pengaduan';
		include 'detail_pengaduan.php';
		break;



	}
}
else
{
		//Isi dari dashboard halaman petugas
		?>
		<h2>Selamat Datang Petugas </h2>
		<h2>Silahkan Untuk Mengecek & Memverifikasi Pengaduan Yang Ada</h2>
		<h4>Anda Login Sebagai	:	<h3><b><?php echo $_SESSION['nama'];

		require '../koneksi.php';
		$sql = mysqli_query($koneksi,"select * from pengaduan where status='0'");//untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan mysql7
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