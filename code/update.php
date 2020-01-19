<?php 
if ($_GET['type'] == "user") {
	include '../conn.php';

	$id_user = $_POST['id_user'];
	$name_user = $_POST['name_user'];
	$username_user = $_POST['username_user'];
	$email_user = $_POST['email_user'];
	$password_user = $_POST['password_user'];
	$class_user = $_POST['akses'];

	$sql = mysqli_query($Open,"UPDATE user_data SET name_user='$name_user', 
		email_user='$email_user', 
		username_user='$username_user',
		password_user='$password_user',
		class_user='$class_user'
		WHERE id_user = '$id_user'");

	if ($sql) {
		?>
		<script>
			alert('Akun berhasil diperbarui.');
			document.location='../view/adminSide/homeAdmin.php?page=users';
		</script>
		<?php
	}else{
		echo("Error description: " . $Open -> error);
		?>
		<script>
			alert('Akun gagal diperbarui.');
			document.location='../view/adminSide/homeAdmin.php?page=users';
		</script>
		<?php
	}
}
?>