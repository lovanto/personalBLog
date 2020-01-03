<?php 
include '../../conn.php';
$id_user = $_GET['id_user'];
mysqli_query($Open, "DELETE FROM user_data WHERE id_user = '$id_user'");
?>
<script>
	alert('Data berhasil dihapus..');
	window.history.back(-1);
</script>