<?php
session_start();
if ($_SESSION['class'] != "Admin") {
	?>
	<script>
		window.history.back(-2);
	</script>
	<?php
}else{

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lovanto Blog | Admin Side</title>

	<link href="../../css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="../../css/styles.css" rel="stylesheet">
	<link href="../../css/modal.css" rel="stylesheet">
	<link rel="icon" href="../../icon.ico" type="image/x-icon" />
	<script src="../../js/jquery.min.js"></script>
</head>
<body>	

	<?php
	include '../../vendor/autoload.php';
	include 'menuAdmin/config.php';
	
	include '../../conn.php';
	include '../../code/clock.php';
	include 'headerAdmin.php';
	include 'bodyAdmin.php';
	include '../footer.php';
	?>
	
</body>
</html>