<?php
if ($_POST['submit'] == "Daftar") {
	$name_user = $_POST['name_user'];
	$username_user = $_POST['username_user'];
	$email_user = $_POST['name_user'];
	$password_user = $_POST['password_user'];
	$class = "User";

	require_once '../conn.php';
	$sql = "INSERT INTO user_data (name_user, email_user, username_user, password_user, class_user) VALUES ('$name_user', '$email_user', '$username_user', '$password_user', '$class')";
	$add = mysqli_query($Open, $sql);
	if ($add) {
		?>
		<script language="JavaScript">
			alert('Akun berhasil dibuat.');
			document.location='../';
		</script>
		<?php
	}else{
		?>
		<script language="JavaScript">
			alert('Akun gagal dibuat.');
			document.location='../';
		</script>
		<?php
	}
}else{
echo "null";
}

?>