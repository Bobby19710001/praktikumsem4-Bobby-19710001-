<?php
include 'Koneksi.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
	<div class="container" style="margin-top:30px">
		<div class="table-responsive">
 			<h2>Data Anggota</h2>
 			<hr>
 			<table class="table table-hover">
 				<thead>
 					<tr>
						<th>No</th>
						<th>ID</th>
						<th>Nama</th>
						<th>Telepon</th>
						<th>Email</th>
						<th>Alamat</th>
						<th width="13%">Aksi</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php
 						$no_urut = 0;
 						$sql = mysqli_query($Koneksi, "SELECT * from anggota");
 						while($data = mysqli_fetch_array($sql)){ $no_urut++;
 					?>
 					<tr>
						<th><?php echo $no_urut ?></th>
						<td><?php echo $data['id_anggota'];?></td>
						<td><?php echo $data['nama_anggota'];?></td>
						<td><?php echo $data['telepon'];?></td>
						<td><?php echo $data['email'];?></td>
						<td><?php echo $data['alamat'];?></td>
						<td>
 						<a href="edit_anggota.php?id=<?php echo $data['id_anggota']; ?>" class="btn btn-warning btn-sm" style="padding-right:20px">Edit</a>
 						<a href="hapus_anggota.php?id=<?php echo $data['id_anggota']; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
 						</td>
 					</tr>
 					<?php
 						}
 					?>
 				</tbody>
			</table>
		</div>
	</div>

</body>
</html>