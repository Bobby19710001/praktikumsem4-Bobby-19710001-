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
 				<a class="nav-link" href="home_user.php"><i class="fa fa-home"></i> BERANDA</a>
 			</li>
 			<li class="nav-item">
 				<a href="logout.php" class="nav-link" href="#"><i class="fa fa-sign-out"></i>LOGOUT</a>
 			</li>
 		</ul>
	</nav>

	<div class="container" style="margin-top:30px">
		<h2>Data Buku</h2> 
 		<hr> 
 		<table class="table table-hover">
 			<thead>
 				<tr>
	 				<th scope="col">No</th>
		 			<th scope="col">Kode Buku</th>
		 			<th scope="col">Judul Buku</th>
		 			<th scope="col">Pengarang</th>
		 			<th scope="col">Penerbit</th>
		 			<th scope="col">Tanggal Terbit</th>
		 			<th scope="col">Kategori</th>
 				</tr>
 			</thead>
 			<tbody>

 <?php
 	$no_urut = 0;
 	$sql = mysqli_query($Koneksi, "SELECT * from buku");
 	while($data = mysqli_fetch_array($sql)){ $no_urut++;
 ?>
 				<tr>
					<th scope="row"><?php echo $no_urut ?></th>
					<td><?php echo $data['kode_buku'];?></td>
					<td><?php echo $data['judul_buku'];?></td>
					<td><?php echo $data['pengarang'];?></td>
					<td><?php echo $data['penerbit'];?></td>
					<td><?php echo $data['tanggal_terbit'];?></td>
					<td><?php echo $data['kategori'];?></td> 
 				</tr>
 <?php
 }
 ?>

 			</tbody>
		</table>
	</div>
	
</body>
</html>