<?php
include 'Koneksi.php';
include 'header.php';

	$notif_belumkembali = "SELECT count(*) as baris from peminjaman_buku where status = 'Belum Kembali'";
	$hasil1 = mysqli_query($Koneksi, $notif_belumkembali);
	$data1 = mysqli_fetch_array($hasil1);
	$notif_sudahkembali = "SELECT count(*) as baris from peminjaman_buku where status = 'Sudah Kembali'";
	$hasil2 = mysqli_query($Koneksi, $notif_sudahkembali);
	$data2 = mysqli_fetch_array($hasil2);
?>

<!DOCTYPE html>
<html lang="en">

	<div class="container" style="margin-top:30px">
		<h2>Data Peminjaman Buku</h2>
		<hr>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Anggota</th>
					<th>Nama Anggota</th>
					<th>Kode Buku</th>
					<th>Judul Buku</th>
					<th>Tanggal Pinjam</th>
					<th>Jatuh Tempo</th>
					<th>Status</th>
					<th >Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no_urut = 0;
					$sql = mysqli_query($Koneksi, "SELECT * from peminjaman_buku");
					while($data = mysqli_fetch_array($sql)){ $no_urut++;
				?>
				<tr>
					<th><?php echo $no_urut ?></th>
					<td><?php echo $data['id_anggota'];?></td>
					<td><?php echo $data['nama_anggota'];?></td>
					<td><?php echo $data['kode_buku'];?></td>
					<td><?php echo $data['judul_buku'];?></td>
					<td><?php echo $data['tanggal_pinjam'];?></td>
					<td><?php echo $data['jatuh_tempo'];?></td>
					<td><?php echo $data['status'];?></td>
					<td>
					<a href="edit_peminjaman_buku.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm" style="padding-right:20px">Edit Status</a>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<strong><font color="red"><?php echo "Buku Belum Kembali : ".$data1['baris']; ?></font></strong>
		<strong><font color="green"><?php echo "Buku Sudah Kembali : ".$data2['baris'];?></font></strong>
	</div>

</body>
</html>