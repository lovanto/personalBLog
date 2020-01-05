<?php 
include '../../conn.php';
$id_post = $_GET['id_post'];
mysqli_query($Open, "DELETE FROM post WHERE id_post = '$id_post'");
?>
<script>
	alert('Data berhasil dihapus..');
	window.history.back(-1);
</script>