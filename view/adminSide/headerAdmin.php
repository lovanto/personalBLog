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