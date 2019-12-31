<?php
if ($_POST['submit'] == "Kirim") {
	$id_post = $_POST['id_post'];
	$anonimOrNo = $_POST['anonimOrNo'];
	$comment_content = $_POST['comment_content'];
	$id_user = $_POST['id_user'];
	$name_user = $_POST['name_user'];
	$date_time = $_POST['date_time'];

	require_once '../conn.php';
	$sql = mysqli_query($Open, "INSERT INTO comment_user (id_post, anonim, comment_content, id_user, name_user, date_comment) VALUES ('$id_post', '$anonimOrNo', '$comment_content', '$id_user', '$name_user', '$date_time')");

	if ($sql) {
		?>
		<script language="JavaScript">
			window.history.back();
		</script>
		<?php
	}else{
		echo("Error description: " . $Open -> error);
		?>
		<script language="JavaScript">
			window.history.back();
		</script>
		<?php
	}
}else{
	echo "null";
}

?>