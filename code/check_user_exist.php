<?php
include '../conn.php';

if (isset($_POST['username'])) {
	$username = mysqli_real_escape_string($Open, $_POST['username']);

	if (!empty($username) ) {
		$sql = "SELECT username_user FROM user_data WHERE username_user = '$username'";
		$result = mysqli_query($Open, $sql); 
		$row_count = mysqli_num_rows($result);

		if ($row_count == 0) {
			?>
			<script type="text/javascript">
				$("#validate-status_username").text("Username tersedia.").css('color', 'green');
				document.getElementById("submit").classList.remove('disabled'); 
			</script>
			<?php
		}else if ($row_count == 1) {
			?>
			<script type="text/javascript">
				$("#validate-status_username").text("Username tidak tersedia.").css('color', 'red'); 
				document.getElementById("submit").classList.add('disabled'); 
			</script>
			<?php
		}else{
			echo "Username double";
		}
	}
}else{

}
?>