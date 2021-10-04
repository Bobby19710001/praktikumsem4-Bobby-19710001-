<?php
include 'Koneksi.php';
include 'header.php';

	$result = mysqli_query($Koneksi, "SELECT * FROM anggota");
	$jsArray = "var IdAnggota = new Array();\n";
	$kodebuku = $_GET['id'];
	$query1 = "SELECT * FROM buku WHERE kode_buku = '$kodebuku'";
	$hasil1 = mysqli_query($Koneksi, $query1);
	$data1 = mysqli_fetch_array($hasil1);
?>

<!DOCTYPE html>
<html lang="en">

	<div class="container" style="margin-top:30px">
		<h2>Input Data Peminjaman Buku</h2>
		<hr>
		<form class="form-horizontal" method="post" action="input_data_pinjam_buku-proses.php">
			<div class="form-group">
				<label for="id_anggota">ID Anggota:</label>
				<select class="form-control" id="id_anggota" name="id_anggota" onchange="changeValue(this.value)">
					<option selected="selected">Pilih ID Anggota</option>
					<?php
						while ($row = mysqli_fetch_array($result)) { 
							echo '<option value="' . $row['id_anggota'] . '">' . $row['id_anggota'] . '</option>';
							$jsArray .= "IdAnggota['" . $row['id_anggota'] . "'] = {nama_anggota:'" . addslashes($row['nama_anggota']) . "'};\n";
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label for="nama_anggota">Nama Anggota:</label>
				<td><input type="text" class="form-control" name="nama_anggota" id="nama_anggota" readonly></td>
			</div>

			<div class="form-group">
				<label for="kode_buku">Kode Buku:</label>
				<td><input type="text" class="form-control" name="kode_buku" id="kode_buku" value="<?php echo($data1["kode_buku"]) ?>"readonly="readonly"></td>
			</div>

			<div class="form-group">
				<label for="judul_buku">Judul Buku:</label>
				<td><input type="text" class="form-control" name="judul_buku" id="judul_buku" value="<?php echo($data1["judul_buku"])?>" readonly="readonly"></td>
			</div>

			<div class="form-group">
				<label for="tanggal_pinjam">Pinjam:</label>
				<input type="date" class="form-control"id="tanggal_pinjam" name="tanggal_pinjam" required>
			</div>

			<div class="form-group">
				<label for="jatuh_tempo">Jatuh Tempo:</label>
				<input type="date" class="form-control" id="jatuh_tempo" name="jatuh_tempo" required>
			</div>

			<div class="form-group">
				<label for="status">Status:</label>
				<select class="form-control" id="status" name="status">
					<option value="" selected="selected">Pilih Status</option>
					<option value="Belum Kembali">Belum Kembali</option>
					<option value="Sudah Kembali">Sudah Kembali</option>
				</select>
			</div>

			<button class="btn btn-warning" type="reset">Reset</button>
			<button class="btn btn-primary" type="submit">Simpan</button>
		</form>
		<hr>
	</div>

</body>

<script type="text/javascript">
	<?php echo $jsArray; ?>
		function changeValue(id){ document.getElementById('nama_anggota').value = IdAnggota[id].nama_anggota;
	}
</script> <!-- Tampilkan Nama Anggota berdasarkan id anggota -->
</html>