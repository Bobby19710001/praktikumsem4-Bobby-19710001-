<?php
include 'Koneksi.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
	
	<div class="container" style="margin-top:30px">
		<h2>Data User</h2>
		<hr>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama User</th>
					<th>Username</th>
					<th>Password</th>
					<th>Level</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no_urut = 0;
					$sql = mysqli_query($Koneksi, "SELECT * from user");
					while($data = mysqli_fetch_array($sql)){ $no_urut++;
				?>
				<tr>
					<th><?php echo $no_urut ?></th>
					<td><?php echo $data['nm_user'];?></td>
					<td><?php echo $data['username'];?></td>
					<td><?php echo $data['password'];?></td>
					<td><?php echo $data['level'];?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>

</body>
</html>