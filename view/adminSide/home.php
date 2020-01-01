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

	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/modal.css" rel="stylesheet">
	<link rel="icon" href="icon.ico" type="image/x-icon" />
</head>
<body>

Ini admin side

</body>
</html>