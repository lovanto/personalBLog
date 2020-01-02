<div>
	<div class="jumbotron p-3 boldText mb-3">
		<img class="mr-2 minMT" src="../../images/icon/flat-user.png" width="20"> Pengguna
	</div>
	<div class="alert alert-success" role="alert">
		Selamat datang <?=$_SESSION['name']?> di users manajer area...
	</div>
	<div class="marginsBottom">
		 Judul | Tambah data | Search Data
	</div>
	<table class="table table-hover">
		<thead class="bg-dark whiteFont">
		<tr>
		<th width="30">No</th>
		<th>Nama Lengkap</th>
		<th>Username</th>
		<th>Email</th>
		<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
			<?php
			$numberRow = 0;
			$query = "SELECT * FROM user_data";
			$result = mysqli_query($Open, $query);

			while ($show=mysqli_fetch_array($result)) {
				$numberRow++;
				?>
				<tr>
					<td><?=$numberRow?></td>
					<td><?=$show['name_user']?></td>
					<td><?=$show['username_user']?></td>
					<td><?=$show['email_user']?></td>
					<td>Edit | Hapus</td>
				</tr>
				<?php
			}
			?>
		</tbody>
		<tfoot class="bg-dark">
			<tr>
				<td height="40"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tfoot>
	</table>
</div>