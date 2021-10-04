<?php
 include 'Koneksi.php';

 	$kodebuku = $_POST['kode_buku'];
 	$judulbuku = $_POST['judul_buku'];
 	$pengarang = $_POST['pengarang'];
 	$penerbit = $_POST['penerbit'];
 	$tanggalterbit = $_POST['tanggal_terbit'];
 	$kategori = $_POST['kategori'];
 
 	if (!empty($kodebuku) and !empty($judulbuku) and !empty($pengarang) and !empty($penerbit) and !empty($tanggalterbit) and !empty($kategori)) {
 			$query = "UPDATE buku SET judul_buku = '$judulbuku', pengarang = '$pengarang', penerbit= '$penerbit', tanggal_terbit = '$tanggalterbit', kategori = '$kategori' WHERE kode_buku = '$kodebuku'";
 			$hasil = mysqli_query($Koneksi, $query);
 	}

 	if ($hasil) {
 	echo "<script type='text/javascript'> alert('Data Berhasil Diedit!'); document.location.href='data_buku.php'</script>";
 	} else {
 	echo "<script type='text/javascript'> alert('Data Gagal Diedit!'); document.location.href='edit_buku.php'</script>";
 	}
 ?>