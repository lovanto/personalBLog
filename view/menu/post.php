<?php
$sql = mysqli_query($Open, "SELECT * FROM post WHERE title_post = '$page'");
while ($data = mysqli_fetch_array($sql)) {
	$id_post = $data['id_post'];
	$title_post = $data['title_post'];
	$image_post = $data['image_post'];
	$description_post = $data['description_post'];
	$id_category = $data['id_category'];
	$hit = $data['hit'] + 1;
	?>
	<div class="container">
		<h3 class="marginsTop"><?=$data['title_post']?><br></h3>
		<div class="col-sm" align="center">
			<img class="marginsBottom marginsTop justify-content-center" src="<?=$data['image_post']?>" width="800">
		</div>
		<p><?=$data['description_post']?><br></p>
		<div class="boldFont marginsTop">
			<?php 
			if ($data['id_category']==1) {
				echo "Programming";
			}elseif ($data['id_category']==2) {
				echo "Tutorial";
			}elseif ($data['id_category']==3) {
				echo "Emulator";
			}else{
				echo "Lainnya";
			}
			?>
		</div>
	</div>
	<hr>
	<?php
	include 'comment_user.php';
	include 'code/plus_hit.php';
}
