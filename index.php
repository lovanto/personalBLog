<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ina">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lovanto Blog</title>

	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/modal.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<link rel="icon" href="icon.ico" type="image/x-icon" />
</head>
<body>

<<<<<<< HEAD
	<?php 
	include 'conn.php';
	include 'code/clock.php';
	include 'view/header.php';
	include 'view/body.php';
	include 'view/footer.php';
=======
	<?php
	require ('vendor/autoload.php');
	require 'cloudinary/vendor/autoload.php';
	require 'cloudinary/config.php';

	require 'conn.php';
	require 'view/header.php';
	require 'view/body.php';
	require 'view/footer.php';
>>>>>>> 9a8a97430a2216d4d5dd3e4e723602166c91de18
	?>
</body>
</html>