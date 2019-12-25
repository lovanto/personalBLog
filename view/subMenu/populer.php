<div class="boldFont">
	Populer
	<hr>
</div>
<?php
$sql = mysqli_query($Open, "SELECT * FROM post ORDER BY hit DESC LIMIT 0, 5"); //start from, until n
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