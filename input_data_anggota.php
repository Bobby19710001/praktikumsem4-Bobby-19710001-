<?php
include 'Koneksi.php';
include 'header.php';

	$date = date("Ymd");
	$sql = "SELECT max(id_anggota) AS id_anggota FROM anggota WHERE id_anggota LIKE '$date%' ";
	$qry = mysqli_query($Koneksi, $sql);
	$dt = mysqli_fetch_array($qry);
	$ambil = $dt['id_anggota'];
	$no = substr($ambil, 8, 3);
	$urut = $no + 1;
	$new = $date . sprintf("%03s", $urut);
?>

<!DOCTYPE html>
<html lang="en">
<body>

	<div class="container" style="margin-top:30px">
 		<h2>Input Data Anggota</h2> 
 		<hr> 
 		<form class="needs-validation" method="post" action="input_data_anggota-proses.php">
 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom01">ID Anggota</label>
 					<input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $new; ?>" readonly>
 				</div>
 
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom02">Nama Anggota</label>
 					<input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Input Nama Anggota" required>
 				</div>
 			</div>
 
 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom02">Telepon</label>
 					<input type="number" class="form-control" id="telepon" name="telepon" placeholder="Input Nomor Telepon" required>
 				</div>
 
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom03">Email</label>
 					<input type="email" class="form-control" id="email" name="email" placeholder="Input Email" required>
 				</div>
 			</div>
 
 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom03">Alamat</label>
 					<textarea class="form-control" id="alamat" name="alamat" cols="50" rows="5" placeholder="Input Alamat" required></textarea>
 				</div>
 			</div>
 
 			<button class="btn btn-warning" type="reset">Reset</button>
 			<button class="btn btn-primary" type="submit">Simpan</button>
 		</form>
		<hr>
	</div>
	
</body>
</html>