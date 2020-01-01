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

<div>
	<div class="bg-light">
		<div class="p-5">
			<div class="jumbotron p-3 boldText mb-3">
				<img class="mr-2" src="../../images/icon/home.png" width="20" style="margin-top: -4px;"> Dashboard
			</div>
			<div class="alert alert-success" role="alert">
				Selamat datang <?=$_SESSION['name']?> di dashboard admin...
			</div>
			<div class="row">
				<div class="card col-sm m-3 zoom" style="width: 18rem;">
					<ul class="list-group list-group-flush">
						<div class="bg-primary rounded-top p-3 whiteFont boldFont row" style="margin-left: -16px; margin-right: -16px;">
							<div class="col-sm">
								<img class="mr-2" src="../../images/icon/user.png" width="120">
							</div>
							<div class="col-sm" align="right"><?=$countUser?> Pengguna</div>
						</div>
						<li class="list-group-item" align="right">
							<a class="link_item" href="">
								Klik untuk lebih lengkapnya..
								<img class="ml-2" src="../../images/icon/plus.png" width="20" style="margin-top: -4px;">
							</a>
						</li>
					</ul>
				</div>
				<div class="card col-sm m-3 zoom" style="width: 18rem;">
					<ul class="list-group list-group-flush">
						<div class="bg-success rounded-top p-3 whiteFont boldFont row" style="margin-left: -16px; margin-right: -16px;">
							<div class="col-sm">
								<img class="mr-2" src="../../images/icon/post.png" width="120">
							</div>
							<div class="col-sm" align="right"><?=$countPost?> Postingan</div>
						</div>
						<li class="list-group-item" align="right">
							<a class="link_item" href="">
								Klik untuk lebih lengkapnya..
								<img class="ml-2" src="../../images/icon/plus.png" width="20" style="margin-top: -4px;">
							</a>
						</li>
					</ul>
				</div>
				<div class="card col-sm m-3 zoom" style="width: 18rem;">
					<ul class="list-group list-group-flush">
						<div class="bg-danger rounded-top p-3 whiteFont boldFont row" style="margin-left: -16px; margin-right: -16px;">
							<div class="col-sm">
								<img class="mr-2" src="../../images/icon/comment.png" width="120">
							</div>
							<div class="col-sm" align="right"><?=$countComment?> Komentar</div>
						</div>
						<li class="list-group-item" align="right">
							<a class="link_item" href="">
								Klik untuk lebih lengkapnya..
								<img class="ml-2" src="../../images/icon/plus.png" width="20" style="margin-top: -4px;">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>