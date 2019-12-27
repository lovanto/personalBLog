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
			<!-- SEARCH -->
			<!-- <div class="border background text-center">
				<div class="right">
					<form action="index.php" method="GET">
						<input class="form-control minFont" type="text" name="search" id="search" placeholder="Pencarian">
						<input class="btn btn-primary marginsTop buttonFont minFont right" type="submit" value="Cari" style="width: 80px;">
					</form>
				</div>
			</div> -->
			<?php
			include 'menu/about.php';
			?>

			<!-- POPULER -->
			<div class="border background text-center marginsTop">
				<div class="boldFont">
					Populer
					<hr>
				</div>
				<?php
				$sql = mysqli_query($Open, "SELECT * FROM post ORDER BY hit DESC LIMIT 0, 3"); 
				//start from, until n
				while ($data = mysqli_fetch_array($sql)) {
					?>
					<a href="index.php?page=<?=$data['title_post']?>">
						<div class="content border zoom blackFont marginsBottom boldFont populerFontSize center">
							<img src="<?=$data['image_post']?>" width="150">
							<div>
								<?php
								if (strlen($data['title_post']) > 35)  {
									echo substr($data['title_post'],0,35)."&nbsp...";
								}else{
									echo $data['title_post'];
								}
								?>
							</div>
						</div>
					</a>
					<?php
				}
				?>
			</div>

			<!-- SARAN -->
			<div class="border background text-center marginsTop">
				<div class="boldFont">
					Mungkin Anda Sukai
					<hr>
				</div>
				<?php
				$sql = mysqli_query($Open, "SELECT * FROM post ORDER BY RAND() LIMIT 3");
				while ($data = mysqli_fetch_array($sql)) {
					?>
					<a href="index.php?page=<?=$data['title_post']?>">
						<div class="content border zoom blackFont marginsBottom boldFont populerFontSize center">
							<img src="<?=$data['image_post']?>" width="150">
							<div>
								<?php
								if (strlen($data['title_post']) > 35)  {
									echo substr($data['title_post'],0,35)."&nbsp...";
								}else{
									echo $data['title_post'];
								}
								?>
							</div>
						</div>
					</a>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>