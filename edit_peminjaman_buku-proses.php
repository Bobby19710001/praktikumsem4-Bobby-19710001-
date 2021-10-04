<?php
include 'Koneksi.php';

	$id = $_POST['id'];
	$idanggota = $_POST['id_anggota'];
	$kodebuku = $_POST['kode_buku'];
	$judulbuku = $_POST['judul_buku'];
	$tanggalpinjam = $_POST['tanggal_pinjam'];
	$jatuhtempo = $_POST['jatuh_tempo'];
	$status = $_POST['status'];
	if (!empty($idanggota) and !empty($kodebuku) and !empty($judulbuku) and !empty($tanggalpinjam) and !empty($jatuhtempo) and !empty($status)) {
	$query = "UPDATE peminjaman_buku SET id_anggota = '$idanggota' , kode_buku = '$kodebuku', judul_buku = '$judulbuku', tanggal_pinjam = '$tanggalpinjam', jatuh_tempo = '$jatuhtempo', status = '$status' WHERE id = '$id'";
	$hasil = mysqli_query($Koneksi, $query);
	}

	if ($hasil) {
		echo"<script type='text/javascript'> alert('Data Berhasil Diedit!'); document.location.href='data_peminjaman_buku.php'</script>";
	} else {
		echo"<script type='text/javascript'> alert('Data Gagal Diedit!'); document.location.href='edit_peminjaman_buku.php'</script>";
	}
?>