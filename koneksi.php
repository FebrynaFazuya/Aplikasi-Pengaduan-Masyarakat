<?php
$koneksi =mysqli_connect("localhost","root","","appem"); //untuk menyambungkan koneksi ke Database PHPmy admin

//untuk mengecek koneksi 
if (mysqli_connect_errno()){
	echo "koneksi database gagal : ".mysqli_connect_errno();

}
?>