<div class="jumbotron">
	<div class="row">
		<div class="col-md-9 marginAll">
			<div class="border background container">
				<?php
					$page = (isset($_GET['page']))? $_GET['page'] : "main";
					switch ($page) {
						case 'home': include 'menu/home.php'; break;
						case 'programming': include 'menu/programming.php'; break;
						case 'tutorial': include 'menu/tutorial.php'; break;
						case 'emulator': include 'menu/emulator.php'; break;
						case 'about': include 'menu/about.php'; break;
						case '$page': include 'menu/post.php'; break;
						case 'main': 
						default : include 'menu/home.php';
				}
				?>
			</div>
		</div>
		<div class="col-sm marginAll">
			<div class="border background text-center">
				<?php include 'submenu/search.php';?>
			</div>
			<div class="border background text-center marginsTop">
				<?php include 'submenu/populer.php';?>
			</div>
			<div class="border background text-center marginsTop">
				<?php include 'submenu/lain.php';?>
			</div>
		</div>
	</div>
</div>