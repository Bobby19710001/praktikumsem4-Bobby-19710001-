<?php
include 'Koneksi.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>

	<div class="container" style="margin-top:30px">
		<h2>Pinjam Buku</h2>
		<hr>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Buku</th>
					<th>Judul Buku</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Tanggal Terbit</th>
					<th>Kategori</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no_urut = 0;
					$sql = mysqli_query($Koneksi, "SELECT * from buku");
					while($data = mysqli_fetch_array($sql)){ $no_urut++;
				?>
				<tr>
					<th><?php echo $no_urut ?></th>
					<td><?php echo $data['kode_buku'];?></td>
					<td><?php echo $data['judul_buku'];?></td>
					<td><?php echo $data['pengarang'];?></td>
					<td><?php echo $data['penerbit'];?></td>
					<td><?php echo $data['tanggal_terbit'];?></td>
					<td><?php echo $data['kategori'];?></td>
					<td>
					<a href="input_data_pinjaman_buku.php?id=<?php echo $data['kode_buku']; ?>" class="btn btn-warning btn-sm" style="padding-right:15px">Pinjam Buku</a>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>

</body>
</html>