<?php
if ($_POST['submit'] == "Tambah Data") {
	$name_user = $_POST['name_user'];
	$username_user = $_POST['username_user'];
	$email_user = $_POST['email_user'];
	$password_user = $_POST['password_user'];
	$class = $_POST['akses'];

	require_once '../../conn.php';
	$sql = mysqli_query($Open, "INSERT INTO user_data (name_user, email_user, username_user, password_user, class_user) VALUES ('$name_user', '$email_user', '$username_user', '$password_user', '$class')");

	if ($sql) {
		?>
		<script language="JavaScript">
			alert('Akun berhasil dibuat.');
			document.location='../../view/adminSide/homeAdmin.php?page=users';
		</script>
		<?php
	}else{
		echo("Error description: " . $Open -> error);
		?>
		<script language="JavaScript">
			alert('Akun gagal dibuat.');
			document.location='../../view/adminSide/homeAdmin.php?page=users';
		</script>
		<?php
	}
}else{
	echo "null";
}

?>