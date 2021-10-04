<?php
include 'Koneksi.php';

 	$idanggota = $_GET['id'];
	if (!empty($idanggota)) {
		$query = "DELETE FROM anggota WHERE id_anggota = '$idanggota'";
		$hasil = mysqli_query($Koneksi, $query);
	}
	if ($hasil) {
 		echo "<script type='text/javascript'> alert('Data Berhasil Dihapus!'); document.location.href='data_anggota.php'</script>";
 	} else {
 		echo "<script type='text/javascript'> alert('Data Gagal Dihapus!'); document.location.href='data_anggota.php'</script>";
 	}
 ?>