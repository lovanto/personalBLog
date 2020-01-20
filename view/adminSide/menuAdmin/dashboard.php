<?php
$sqlUser = "SELECT * FROM user_data";
$sqlPost = "SELECT * FROM post";
$sqlComment = "SELECT * FROM comment_user";

$resultUser = mysqli_query($Open, $sqlUser);
$resultPost = mysqli_query($Open, $sqlPost);
$resultComment = mysqli_query($Open, $sqlComment);

$countUser = mysqli_num_rows($resultUser);
$countPost = mysqli_num_rows($resultPost);
$countComment = mysqli_num_rows($resultComment);
?>

<div class="jumbotron p-3 boldText mb-3">
	<?php echo cl_image_tag('home', array("width"=>20))?> Dashboard
</div>
<div class="alert alert-success" role="alert">
	Selamat datang <?=$_SESSION['name']?> di dashboard admin...
</div>
<div class="row">
	<div class="card col-sm m-3 zoom widthCardTop">
		<ul class="list-group list-group-flush">
			<div class="bg-primary rounded-top p-3 whiteFont boldFont row minRNL">
				<div class="col-sm">
					<?php echo cl_image_tag('user', array("width"=>120))?>
				</div>
				<div class="col-sm" align="right"><?=$countUser?> Pengguna</div>
			</div>
			<li class="list-group-item" align="right">
				<a class="link_item" href="homeAdmin.php?page=users">
					Klik untuk lebih lengkapnya..
					<?php echo cl_image_tag('plus', array("width"=>20))?>
				</a>
			</li>
		</ul>
	</div>
	<div class="card col-sm m-3 zoom">
		<ul class="list-group list-group-flush">
			<div class="bg-success rounded-top p-3 whiteFont boldFont row minRNL">
				<div class="col-sm">
					<?php echo cl_image_tag('post', array("width"=>120))?>
				</div>
				<div class="col-sm" align="right"><?=$countPost?> Postingan</div>
			</div>
			<li class="list-group-item" align="right">
				<a class="link_item" href="homeAdmin.php?page=posting">
					Klik untuk lebih lengkapnya..
					<?php echo cl_image_tag('plus', array("width"=>20))?>
				</a>
			</li>
		</ul>
	</div>
	<div class="card col-sm m-3 zoom">
		<ul class="list-group list-group-flush">
			<div class="bg-danger rounded-top p-3 whiteFont boldFont row minRNL">
				<div class="col-sm">
					<?php echo cl_image_tag('comment', array("width"=>120))?>
				</div>
				<div class="col-sm" align="right"><?=$countComment?> Komentar</div>
			</div>
			<li class="list-group-item" align="right">
				<a class="link_item" href="homeAdmin.php?page=comment">
					Klik untuk lebih lengkapnya..
					<?php echo cl_image_tag('plus', array("width"=>20))?>
				</a>
			</li>
		</ul>
	</div>
</div>