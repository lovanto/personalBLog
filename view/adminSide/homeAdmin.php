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
</head>
<body>		
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 10px 0; font-size: 13px; padding-left: 10px;">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item text-center">
				<a class="nav-link space blueImage" href="homeAdmin.php"><img src="../../images/icon.png" width="20px"></a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="homeAdmin.php">Dashboard</a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="index.php?page=programming">Pengguna</a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="index.php?page=tutorial">Postingan</a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="index.php?page=emulator">Komentar Pengguna</a>
			</li>
		</ul>
		<div class="nav-item text-center boldText nav-link space whiteFont float-right" align="right">
			<?=$_SESSION['name']?>, 
			<a href="code/logout.php"> Logout</a>
		</div>
	</nav>

	<div>
		<div class="bg-light">
			<div class="p-5">
				<div class="jumbotron p-3 boldText mb-3">Icon Home Dashboard</div>
				<div class="alert alert-success" role="alert">
					This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
				</div>
				<div class="row">
					<div class="card col-sm m-3 " style="width: 18rem;">
						<ul class="list-group list-group-flush">
							<div class="bg-primary rounded-top p-3 whiteFont" style="margin-left: -16px; margin-right: -16px;">
								adwdad<br><br><br><br><br><br>
							</div>
							<li class="list-group-item">Dapibus ac facilisis in</li>
						</ul>
					</div>
					<div class="card col-sm m-3" style="width: 18rem;">
						<ul class="list-group list-group-flush">
							<div class="bg-success rounded-top p-3 whiteFont" style="margin-left: -16px; margin-right: -16px;">
								adwdad<br><br><br><br><br><br>
							</div>
							<li class="list-group-item">Dapibus ac facilisis in</li>
						</ul>
					</div>
					<div class="card col-sm m-3" style="width: 18rem;">
						<ul class="list-group list-group-flush">
							<div class="bg-danger rounded-top p-3 whiteFont" style="margin-left: -16px; margin-right: -16px;">
								adwdad<br><br><br><br><br><br>
							</div>
							<li class="list-group-item">Dapibus ac facilisis in</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include '../footer.php'; ?>
</body>
</html>