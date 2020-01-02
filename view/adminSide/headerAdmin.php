<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 10px 0; font-size: 13px; padding-left: 10px;">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item text-center">
			<a class="nav-link space blueImage" href="homeAdmin.php?page=home"><img src="../../images/icon.png" width="20px"></a>
		</li>
		<li class="nav-item text-center boldText">
			<a class="nav-link space" href="homeAdmin.php?page=home">Dashboard</a>
		</li>
		<li class="nav-item text-center boldText">
			<a class="nav-link space" href="homeAdmin.php?page=users">Pengguna</a>
		</li>
		<li class="nav-item text-center boldText">
			<a class="nav-link space" href="homeAdmin.php?page=posting">Postingan</a>
		</li>
		<li class="nav-item text-center boldText">
			<a class="nav-link space" href="homeAdmin.php?page=comment">Komentar Pengguna</a>
		</li>
	</ul>
	<div class="nav-item text-center boldText nav-link space whiteFont float-right" align="right">
		<?=$_SESSION['name']?>, 
		<a href="../../code/logout.php"> Logout</a>
	</div>
</nav>