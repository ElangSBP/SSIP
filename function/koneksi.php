<?php

	$server ="localhost";
	$username = "root";
	$password = "";
	$database = "toko_barang";
	
	$koneksi = mysqli_connect($server, $username , $password , $database) or die("Koneksi Gagal");
?>