<?php
 include 'Koneksi.php';

 	$kodebuku = $_POST['kode_buku'];
 	$judulbuku = $_POST['judul_buku'];
 	$pengarang = $_POST['pengarang'];
 	$penerbit = $_POST['penerbit'];
 	$tanggalterbit = $_POST['tanggal_terbit'];
 	$kategori = $_POST['kategori'];
 	$query = "INSERT INTO buku (kode_buku, judul_buku, pengarang, penerbit, tanggal_terbit, kategori) VALUES ('$kodebuku', '$judulbuku', '$pengarang', '$penerbit', '$tanggalterbit', '$kategori')";
	$hasil = mysqli_query($Koneksi, $query);
 
 	if ($hasil) {
 		echo "<script type='text/javascript'> alert('Data Berhasil Disimpan!'); document.location.href='data_buku.php'</script>";
 	} else {
 		echo "<script type='text/javascript'> alert('Data Gagal Disimpan!'); document.location.href='input_data_buku.php'</script>";
 	}
?>