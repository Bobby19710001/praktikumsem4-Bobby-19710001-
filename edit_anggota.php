<?php
include 'Koneksi.php';
include 'header.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM anggota WHERE id_anggota = '$id'";
	$hasil = mysqli_query($Koneksi, $query);
	$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<body>
	<div class="container" style="margin-top:30px">
 		<h2>Edit Data Anggota</h2>
 		<hr>
 		<form class="needs-validation" method="post" action="edit_anggota-proses.php">
 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom01">ID Anggota</label>
 					<input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo($data["id_anggota"]) ?>" readonly>
 				</div>
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom02">Nama Anggota</label>
 					<input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="<?php echo($data["nama_anggota"]) ?>" required>
 				</div>
 			</div>

 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom02">Telepon</label>
 					<input type="number" class="form-control" id="telepon" name="telepon" value="<?php echo($data["telepon"]) ?>" required>
 				</div>
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom03">Email</label>
 					<input type="email" class="form-control" id="email" name="email" value="<?php echo($data["email"]) ?>" required>
 				</div>
 			</div>

 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom03">Alamat</label>
 					<textarea class="form-control" id="alamat" name="alamat" cols="50" rows="5" required><?php echo($data["alamat"]) ?></textarea>
 				</div>
 			</div>

 			<button class="btn btn-warning" type="reset">Reset</button>
 			<button class="btn btn-primary" type="submit">Simpan</button>
		</form>
		<hr>
	</div>
	
</body>
</html>