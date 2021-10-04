<?php
include 'Koneksi.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
	<div class="container" style="margin-top:30px">
 		<h2>Input Data Buku</h2> 
 		<hr> 
 		<form class="needs-validation" method="post" action="input_data_buku-proses.php">
 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom01">Kode Buku</label>
 					<input type="text" class="form-control" id="kode_buku" name="kode_buku" placeholder="Input Kode Buku" required autofocus>
 				</div>
 
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom02">Judul Buku</label>
 					<input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Input Judul Buku" required>
 				</div>
 			</div>
 
 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom01">Pengarang</label>
 					<input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Input Nama Pengarang" required>
 				</div>
 
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom02">Penerbit</label>
 					<input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Input Nama Penerbit" required>
 				</div>
 			</div>
 
 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom03">Tanggal Terbit</label>
 					<input type="date" class="form-control" id="tanggal_terbit" name="tanggal_terbit" required>
 				</div>
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom04">Kategori Buku</label>
 					<select class="custom-select" id="kategori" name="kategori" required>
 						<option selected disabled value="">Pilih Kategori...</option>
 						<option value="Agama">Agama</option>
 						<option value="Novel">Novel</option>
 						<option value="Sains">Sains</option>
 						<option value="Teknologi">Teknologi</option>
 						<option value="Lainnya">Lainnya</option>
 					</select>
 				</div>
 			</div>
 
 			<button class="btn btn-warning" type="reset">Reset</button>
 			<button class="btn btn-primary" type="submit">Simpan</button>
 		</form>
		<hr>
	</div>
	
</body>
</html>
