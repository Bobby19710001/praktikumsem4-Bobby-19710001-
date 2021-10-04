<?php
include 'Koneksi.php';
include 'header.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM peminjaman_buku WHERE id = '$id'";
	$hasil = mysqli_query($Koneksi, $query);
	$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<body>

	<div class="container" style="margin-top:30px">
		<h2>Edit Data Peminjaman Buku</h2>
		<hr>
		<form class="form-horizontal" method="post" action="edit_peminjaman_buku-proses.php">
			<div class="form-group">
				<label for="nama_anggota">ID Anggota:</label>
				<td><input type="text" class="form-control" name="id_anggota" id="id_anggota" value="<?php echo($data["id_anggota"]) ?>" readonly="readonly"></td>
			</div>

			<div class="form-group">
				<label for="nama_anggota">Nama Anggota:</label>
				<td><input type="text" class="form-control" name="nama_anggota" id="nama_anggota" value="<?php echo($data["nama_anggota"]) ?>" readonly="readonly">
				</td>
			</div>
			
			<div class="form-group">
				<label for="kode_buku">Kode Buku:</label>
				<td><input type="text" class="form-control" name="kode_buku" id="kode_buku" value="<?php echo($data["kode_buku"]) ?>"readonly="readonly">
				</td>
			</div>

			<div class="form-group">
				<label for="judul_buku">Judul Buku:</label>
				<td><input type="text" class="form-control" name="judul_buku" id="judul_buku" value="<?php echo($data["judul_buku"]) ?>" readonly="readonly">
				</td>
			</div>

			<div class="form-group">
				<label for="tanggal_pinjam">Pinjam:</label>
				<input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?php echo($data["tanggal_pinjam"]) ?>" required>
			</div>

			<div class="form-group">
				<label for="jatuh_tempo">Jatuh Tempo:</label>
				<input type="date" class="form-control" id="jatuh_tempo" name="jatuh_tempo" value="<?php echo($data["jatuh_tempo"]) ?>" required>
			</div>

			<div class="form-group">
				<label for="status">Status:</label>
				<select class="form-control" name="status" id="status">
					<?php
						if($data['status'] == "Belum Kembali") echo "<option value='Belum Kembali' selected>Belum Kembali</option>";
							else echo "<option value='Belum Kembali'>Belum Kembali</option>";
						if($data['status'] == "Sudah Kembali") echo "<option value='Sudah Kembali' selected>Sudah Kembali</option>";
							else echo "<option value='Sudah Kembali'>Sudah Kembali</option>";
					?>
				</select>
			</div>

			<button class="btn btn-warning" type="reset">Reset</button>
			<button class="btn btn-primary" type="submit">Simpan</button>
			<input type="hidden" name="id" id="id" value="<?php echo($data["id"]) ?>">
		</form>
		<hr>
	</div>

</body>
</html>