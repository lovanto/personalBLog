<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 10px 0; font-size: 13px; padding-left: 10px;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item text-center">
				<a class="nav-link space blueImage" href="index.php"><img src="images/icon.png" width="20px"></a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="index.php">Beranda</a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="index.php?page=programming">Programming</a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="index.php?page=tutorial">Tutorial</a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="index.php?page=emulator">Emulator</a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="index.php?page=about">Tentang Saya</a>
			</li>
		</ul>
		<div class="nav-item text-center boldText float-right">
			<a class="nav-link space whiteFont" href="#login">Masuk</a>
		</div>
	</div>
</nav>

<!-- Login -->
<div id="login" class="modal-window">
	<div>
		<a href="#" title="Close" class="modal-close"><font size="5">&times;</font></a>
		<h1>Login</h1>
		<div>
			<form method="POST" action="php/code.php" enctype="multipart/form-data">
				<input type="email" name="emailLogin" class="form-control" style="margin-bottom: 10px;" placeholder="Email">
				<input type="password" name="passwordLogin" class="form-control" style="margin-bottom: 10px;" placeholder="Password">
				<div align="right"><input type="Submit" name="Submit" value="Masuk" class="btn btn-primary"></div>
				<div class="marginsTop blackFont" align="center"><a href="index.php?page=signup">Belum punya akun? Daftar disini.</a></div>
			</form>
		</div>
	</div>
</div>