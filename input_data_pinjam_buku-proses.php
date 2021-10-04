<?php
include 'Koneksi.php';

	$idanggota = $_POST['id_anggota'];
	$namaanggota = $_POST['nama_anggota'];
	$kodebuku = $_POST['kode_buku'];
	$judulbuku = $_POST['judul_buku'];
	$tanggalpinjam = $_POST['tanggal_pinjam'];
	$jatuhtempo = $_POST['jatuh_tempo'];
	$status = $_POST['status'];
	$query = "INSERT INTO peminjaman_buku (id_anggota, nama_anggota, kode_buku, judul_buku, tanggal_pinjam, jatuh_tempo, status)VALUES ('$idanggota', '$namaanggota','$kodebuku', '$judulbuku', '$tanggalpinjam', '$jatuhtempo', '$status')";
	$hasil = mysqli_query($Koneksi, $query);
	if ($hasil) {
		echo "<script type='text/javascript'> alert('Data Berhasil Disimpan!'); document.location.href='data_peminjaman_buku.php'</script>";
	} else {
		echo "<script type='text/javascript'> alert('Data Gagal Disimpan!'); document.location.href='input_data_pinjambuku.php'</script>";
	}
?>