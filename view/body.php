<div class="jumbotron">
	<div class="row">
		<div class="col-md-8 marginAll">
			<div class="border background container">
				<?php
				$page = (isset($_GET['page']))? $_GET['page'] : "main";
				switch ($page) {
					case 'home': include 'menu/home.php'; break;
					case 'programming': include 'menu/programming.php'; break;
					case 'tutorial': include 'menu/tutorial.php'; break;
					case 'emulator': include 'menu/emulator.php'; break;
					case 'about': include 'menu/about.php'; break;
					case 'main': 
					default : include 'menu/home.php';
					case $page: include 'menu/post.php'; break;
				}
				?>
			</div>
		</div>
		<div class="col-sm marginAll">
			<?php
			include 'sideBar/search.php';
			include 'sideBar/populer.php';
			include 'sideBar/recommendation.php';
			?>
		</div>
	</div>
</div>