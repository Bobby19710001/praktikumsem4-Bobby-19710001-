<?php
 include 'Koneksi.php';

 	$idanggota = $_POST['id_anggota'];
 	$namaanggota = $_POST['nama_anggota'];
 	$telepon = $_POST['telepon'];
 	$email = $_POST['email'];
 	$alamat = $_POST['alamat'];

 	if (!empty($idanggota) and !empty($namaanggota) and !empty($telepon) and !empty($email) and !empty($alamat)) {
 		$query = "UPDATE anggota SET nama_anggota = '$namaanggota', telepon = '$telepon', email = '$email', alamat = '$alamat' WHERE id_anggota = '$idanggota'";
 		$hasil = mysqli_query($Koneksi, $query);
 	}

 	if ($hasil) {
 		echo "<script type='text/javascript'> alert('Data Berhasil Diedit!'); document.location.href='data_anggota.php'</script>";
 	} else {
 		echo "<script type='text/javascript'> alert('Data Gagal Diedit!'); document.location.href='edit_anggota.php'</script>";
 	}
 ?>