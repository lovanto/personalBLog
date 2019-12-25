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
			<img src="<?=$data['image_post']?>" width="120px">
			<div><?=$data['title_post']?></div>
		</div>
	</a>
	<?php
}
?>