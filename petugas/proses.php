<?php
require '../koneksi.php'; //menyambungkan ke data koneksi
$sql=mysqli_query($koneksi,"update pengaduan set status='proses' where id_pengaduan='$_GET[id]'"); //untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD , menggunakan mysqli karena menggunakan php 7
if ($sql) //untuk mengetes suatu kondisi 
{
	header('location:petugas.php?url=verivikasi_pengaduan'); //menghubungkan ke verivikasi pengaduan
}
?>