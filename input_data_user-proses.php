<?php
include 'Koneksi.php';

	$nama= $_POST['nama_anggota'];
	$idanggota = $_POST['id_anggota'];
	$password = md5($_POST['password']);
	$level = $_POST['level'];
	$query = "INSERT INTO user (nm_user, username, password, level) VALUES ('$nama', '$idanggota', '$password', '$level')";
	$hasil = mysqli_query($Koneksi, $query);
	
	if ($hasil) {
		echo "<script type='text/javascript'> alert('Data Berhasil Disimpan!'); document.location.href='data_user.php'</script>";
	} else {
		echo "<script type='text/javascript'> alert('Data Gagal Disimpan!'); document.location.href='input_data_user.php'</script>";
	}
?>