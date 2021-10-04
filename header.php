<?php
include 'Koneksi.php';
session_start();

	if (!isset($_SESSION["nama"])) {
 		echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
 		exit;
	}

	$nama = $_SESSION["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Aplikasi Perpustakaan</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
</head>
<body>

	<div class="jumbotron text-center" style="margin-bottom:0">
 		<h1>Aplikasi Perpustakaan</h1>
 		<p><marquee><?php echo $nama; ?> - Praktikum Pemrograman Web II - Fakultas Teknologi Informasi - 2021</marquee></p>
	</div>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 		<ul class="navbar-nav">
 			<li class="nav-item">
 				<a class="nav-link" href="home.php"><i class="fa fa-home"></i> BERANDA</a>
 			</li>

 			<li class="nav-item dropdown">
 				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-plus-circle"></i>INPUT </a>
 				<div class="dropdown-menu">
 					<a class="dropdown-item" href="input_data_buku.php">INPUT BUKU</a>
 					<a class="dropdown-item" href="input_data_anggota.php">INPUT ANGGOTA</a> 
 					<a class="dropdown-item" href="input_data_user.php">INPUT USER</a>
 				</div>
 			</li>

 			<li class="nav-item dropdown">
 				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-list"></i>DATA</a>
 				<div class="dropdown-menu">
 					<a class="dropdown-item" href="data_buku.php">DATA BUKU</a>
 					<a class="dropdown-item" href="data_anggota.php">DATA ANGGOTA</a>
 					<a class="dropdown-item" href="data_user.php">DATA USER</a>
 				</div>
 			</li>

 			<li class="nav-item dropdown">
 				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-cube"></i>PEMINJAMAN</a>
 				<div class="dropdown-menu">
 					<a class="dropdown-item" href="data_pinjam_buku.php">PINJAM BUKU</a>
 					<a class="dropdown-item" href="data_peminjaman_buku.php">DATA PEMINJAMAN</a>
 				</div>
 			</li>

 			<li class="nav-item">
 				<a href="logout.php" class="nav-link" href="#"><i class="fa fa-sign-out"></i>LOGOUT</a>
 			</li>
 		</ul>
	</nav>
	
</body>
</html>