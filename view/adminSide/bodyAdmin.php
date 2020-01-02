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
			<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'dashboard': include 'menuAdmin/dashboard.php'; break;
				case 'users': include 'menuAdmin/users.php'; break;
				case 'posting': include 'menuAdmin/posting.php'; break;
				case 'comment': include 'menuAdmin/comment.php'; break;
				
				case 'main': 
				default : include 'menuAdmin/dashboard.php'; break;
			}
			?>
		</div>
	</div>
</div>
</div>