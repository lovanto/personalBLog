<?php
$_SESSION['id_post'] = $id_post;
if (!empty($_SESSION['name'])) {
	?>
	<form action="code/post_comment.php" method="POST">
		<div class="container marginsTop marginsBottom">
			<div class="marginsBottom boldFont">Komentar:</div>
			<input type="hidden" name="id_post" value="<?=$id_post?>">
			<input type="hidden" name="id_user" value="<?=$_SESSION['id_user']?>">
			<input type="hidden" name="name_user" value="<?=$_SESSION['name']?>">
			<input type="hidden" name="date_time" value="<?php echo date('Y-m-d H:i:s'); ?>">
			<div class="marginsBottom">
				Anonim?
				<input class="ml-2" type="radio" name="anonimOrNo" value="1" required> Iya
				<input class="ml-2" type="radio" name="anonimOrNo" value="0" required> Tidak
			</div>
			<textarea class="form-control textUnResize" name="comment_content" rows="3" required></textarea>
			<div align="right">
				<input class="btn btn-primary marginsTop col-md-2" type="submit" name="submit" id="submit" value="Kirim">
			</div>
		</div>
	</form>
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
$count_data = mysqli_num_rows($getComment);
if ($count_data > 0) {
	while ($resultComment = mysqli_fetch_array($getComment)) {
		?>
		<div class="container">
			<div class="container rounded border marginsBottom">
				<div class="marginsTop boldFont">
					<?php
					if ($resultComment['anonim'] == 1) {
						echo "Anonim";
					}else{
						echo $resultComment['name_user'];
					}
					?>
				</div>
				<div class="space marginsTop"><?=$resultComment['comment_content']?></div>
				<div class="space marginsBottom marginsTop" align="right"><?=$resultComment['date_comment']?></div>
			</div>
		</div>
		<?php
	}
}else{
	echo '<div class="container"> Belum ada komentar. Jadilah orang pertama yang berkomentar... </div>';
}
