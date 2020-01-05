<?
$id_comment = $_GET['id_comment'];
$queryGetData = mysqli_query($Open, "SELECT * FROM comment_user WHERE id_comment = '$id_comment'");
$dataToArray = mysqli_fetch_array($queryGetData);
$id_post = $dataToArray['id_post'];
$anonim = $dataToArray['anonim'];
$comment_content = "Komentar ini dihapus karena mengandung kata kata yang tidak pantas."
$id_user = $dataToArray['id_user'];
$name_user = $dataToArray['name_user'];

$sql = mysqli_query($Open,"UPDATE comment_user SET id_post='$id_post', 
	anonim='$anonim', 
	username_user='',
	password_user='',
	class_user=''
	WHERE id_comment = '$id_comment'");

if ($sql) {
	?>
	<script>
		alert('Akun berhasil diperbarui.');
		document.location='../../view/adminSide/homeAdmin.php?page=comment';
	</script>
	<?php
}else{
	echo("Error description: " . $Open -> error);
	?>
	<script>
		alert('Akun gagal diperbarui.');
		document.location='../../view/adminSide/homeAdmin.php?page=comment';
	</script>
	<?php
}
?>