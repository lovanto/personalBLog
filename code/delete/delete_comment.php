<?php 
include '../../conn.php';
$id_comment = $_GET['id_comment'];
mysqli_query($Open, "DELETE FROM comment_user WHERE id_comment = '$id_comment'");
?>
<script>
	alert('Data berhasil dihapus..')
	window.history.back(-1);
</script>