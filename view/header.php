<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 10px 0; font-size: 13px; padding-left: 10px;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item text-center">
				<a class="nav-link space blueImage" href="index.php"><?php echo cl_image_tag('icon', array("width"=>20))?></a>
			</li>
			<li class="nav-item text-center boldText">
				<a class="nav-link space" href="index.php">Beranda</a>
			</li>
			<?php
			if (empty($_SESSION['class'])){
				// DO NOTHING
			}elseif ($_SESSION['class'] == "Admin") {
				?>
				<li class="nav-item text-center boldText">
					<a class="nav-link space" href="view/adminSide/homeAdmin.php">Beranda Admin</a>
				</li>
				<?php
			}else{
				// DO NOTHING
			}
			?>
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
		<?php
		if (empty($_SESSION['username'])){
			?>
			<div class="nav-item text-center boldText float-right">
				<a class="nav-link whiteFont" href="index.php?page=signup">Daftar</a>
			</div>
			<div class="nav-item text-center boldText float-right">
				<a class="nav-link space whiteFont" href="#login">Masuk</a>
			</div>
			<?php
		}else{
			?>
			<div class="nav-item text-center boldText float-right nav-link space whiteFont">
				<?=$_SESSION['name']?>, 
				<a href="code/logout.php"> Logout</a>
			</div>
			<?php
		}
		?>
	</div>
</nav>

<!-- Login -->
<div id="login" class="modal-window">
	<?php include 'menu/login.php'; ?>
</div>