<?php
 include 'Koneksi.php';

	$idanggota = $_POST['id_anggota'];
 	$namaanggota = $_POST['nama_anggota'];
 	$telepon = $_POST['telepon'];
 	$email = $_POST['email'];
 	$alamat = $_POST['alamat'];
 	$query = "INSERT INTO anggota (id_anggota, nama_anggota, telepon, email, alamat) VALUES ('$idanggota', '$namaanggota', '$telepon', '$email', '$alamat')";
 	$hasil = mysqli_query($Koneksi, $query);

 		if ($hasil) {
 			echo "<script type='text/javascript'> alert('Data Berhasil Disimpan!'); document.location.href='data_anggota.php'</script>";
 		} else {
 			echo "<script type='text/javascript'> alert('Data Gagal Disimpan!'); document.location.href='input_data_anggota.php'</script>";
 		}
 ?>
