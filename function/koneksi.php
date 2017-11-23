<?php
	// Database configuration
	$server ="localhost";
	$username = "root";
	$password = "";
	$database = "toko_barang";
	
	//Connection query 
	$koneksi = mysqli_connect($server, $username , $password , $database) or die("Koneksi Gagal");
?>