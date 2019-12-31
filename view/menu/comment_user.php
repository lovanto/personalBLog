<?php
if (!empty($_SESSION['name'])) {
	?>
	<div class="container marginsTop marginsBottom">
		<div class="marginsBottom boldFont">Komentar:</div>
		<textarea class="form-control textUnResize" rows="3"></textarea>
	</div>
	<hr>
	<?php
}else{
	?>
	<div class="container marginsTop marginsBottom">
		Silakan login untuk memberikan komentar, 
		<a class="link_item" href="#login">login disini</a>
	</div>
	<?php
}
$getComment = mysqli_query($Open, "SELECT * FROM comment_user WHERE id_post = '$id_post' ORDER BY id_comment DESC");
while ($resultComment = mysqli_fetch_array($getComment)) {
	?>
	<div class="container">
		<div class="container rounded border marginsBottom">
			<div class="marginsTop boldFont"><?=$resultComment['name_user']?></div>
			<div class="space marginsBottom marginsTop"><?=$resultComment['comment_content']?></div>
		</div>
	</div>
	<?php
}