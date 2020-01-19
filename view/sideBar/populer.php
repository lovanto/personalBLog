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
			<div class="content border zoom blackFont marginsBottom boldFont populerFontSize">
				<div class="centerImage text-center">
					<?php echo cl_image_tag($data["image_post"], array("width"=>150))?>
				</div>
				<div>
					<?php
						echo $data['title_post'];
					?>
				</div>
			</div>
		</a>
		<?php
	}
	?>
</div>