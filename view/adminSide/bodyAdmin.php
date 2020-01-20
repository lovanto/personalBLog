<div>
	<div class="bg-light">
		<div class="p-5">
			<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'dashboard': include 'menuAdmin/dashboard.php'; break;
				case 'users': include 'menuAdmin/users.php'; break;
				case 'update_users': include 'menuAdmin/update_user_view.php'; break;
				case 'posting': include 'menuAdmin/posting.php'; break;
				case 'create_posting': include 'menuAdmin/create_post_view.php'; break;
				case 'comment': include 'menuAdmin/comment.php'; break;
				case 'main': 
				default : include 'menuAdmin/dashboard.php'; break;
			}
			?>
		</div>
	</div>
</div>
</div>