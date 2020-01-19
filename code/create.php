<?php
if ($_POST['submit'] == "Publikasikan") {
	$id_post = NULL;
	$title_post = $_POST['title_post'];
	$image_post = $_POST['image_post'];
	$description_post = $_POST['description_post'];
	$content_post = $_POST['editor'];
	$id_user = $_POST['id_user'];
	$writed_by = $_POST['name'];
	$id_category = $_POST['id_category'];
	$hit = 0;
	$status_post = "posted";

	include '../../conn.php';
	$sql = mysqli_query($Open, "INSERT INTO post (id_post, title_post, image_post, description_post, content_post, id_user, writed_by, id_category, hit, status_post) VALUES (id_post, '$title_post', '$image_post', '$description_post', '$content_post', '$id_user', '$writed_by', '$id_category', '$hit', '$status_post')");

	if ($sql) {
		?>
		<script language="JavaScript">
			alert('Postingan berhasil dipublikasikan.');
			document.location='../../view/adminSide/homeAdmin.php?page=posting';
		</script>
		<?php
	}else{
		echo("Error description: " . $Open -> error);
		?>
		<script language="JavaScript">
			alert('Postingan gagal dipublikasikan.');
			document.location='../../view/adminSide/homeAdmin.php?page=posting';
		</script>
		<?php
	}
}

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
}

?>