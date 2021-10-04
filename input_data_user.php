<?php

 include 'Koneksi.php';
 include 'header.php';

	$result = mysqli_query($Koneksi, "SELECT * FROM anggota");
	$jsArray = "var IdAnggota = new Array();\n";

?>

<!DOCTYPE html>
<html lang="en">
<body>

	<div class="container" style="margin-top:30px">
		<h2>Input Data User</h2>
			<hr>
				<form class="needs-validation" method="post" action="input_data_user-proses.php">
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
						<label for="nama_anggota">Password:</label>
						<td><input type="password" class="form-control" name="password" id="password" required></td>
						<input type="checkbox" onclick="myFunction()"> Show Password
					</div>
					<button class="btn btn-warning" type="reset">Reset</button>
					<button class="btn btn-primary" type="submit">Simpan</button>
					<input type="hidden" name="level" id="level" value="User">
				</form>
			<hr>
	</div>

<script type="text/javascript">

	<?php
	 echo $jsArray;
	 ?>

	function changeValue(id){
		document.getElementById('nama_anggota').value = IdAnggota[id].nama_anggota;
	}
</script>

<script>
	function myFunction() {
		var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
	}
</script>

</body>
</html>