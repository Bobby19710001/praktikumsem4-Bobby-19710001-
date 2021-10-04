<?php
include 'Koneksi.php';
include 'header.php';

	$kode = $_GET['kode'];
	$query = "SELECT * FROM buku WHERE kode_buku = '$kode'";
	$hasil = mysqli_query($Koneksi, $query);
	$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<body>

	<div class="container" style="margin-top:30px">
 		<h2>Edit Data Buku</h2>
 		<hr>
 		<form class="needs-validation" action="edit_buku-proses.php" method="post">
 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom01">Kode Buku</label>
 					<input type="text" class="form-control" id="kode_buku" name="kode_buku" value="<?php echo($data["kode_buku"]) ?>" readonly>
 				</div>
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom02">Judul Buku</label>
 					<input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo($data["judul_buku"]) ?>" required>
 				</div>
 			</div>

 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom01">Pengarang</label>
 					<input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo($data["pengarang"]) ?>" required>
 				</div>
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom02">Penerbit</label>
 					<input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo($data["penerbit"]) ?>" required>
 				</div>
 			</div>

 			<div class="form-row">
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom03">Tanggal Terbit</label>
 					<input type="date" class="form-control" id="tanggal_terbit" name="tanggal_terbit" value="<?php echo($data["tanggal_terbit"]) ?>" required>
 				</div>
 				<div class="col-md-6 mb-3">
 					<label for="validationCustom04">Kategori Buku</label>
 					<select class="custom-select" id="kategori" name="kategori" required>
 					<?php
 						if ($data['kategori'] == "Agama") echo "<option value='Agama' selected>Agama</option>";
 							else echo "<option value='Agama'>Agama</option>";
 						if ($data['kategori'] == "Novel") echo "<option value='Novel' selected>Novel</option>";
 							else echo "<option value='Novel'>Novel</option>";
 						if ($data['kategori'] == "Sains") echo "<option value='Sains' selected>Sains</option>";
 							else echo "<option value='Sains'>Sains</option>";
 						if ($data['kategori'] == "Teknologi") echo "<option value='Teknologi' selected>Teknologi</option>";
 							else echo "<option value='Teknologi'>Teknologi</option>";
 						if ($data['kategori'] == "Lainnya") echo "<option value='Lainnya' selected>Lainnya</option>";
 							else echo "<option value='Lainnya'>Lainnya</option>";
 					?>
 					</select>
 				</div>
 			</div>

 			<button class="btn btn-warning" type="button" onclick="window.location='data_buku.php'">Kembali</button>
			<button class="btn btn-primary" type="submit">Simpan</button>
		</form>
		<hr>
	</div>
</body>
</html>