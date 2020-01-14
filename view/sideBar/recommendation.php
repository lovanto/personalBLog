<div class="border background text-center marginsTop">
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
				
				<div>
					<?php
					if (strlen($data['title_post']) > 35)  {
						echo substr($data['title_post'],0,35)."&nbsp...";
					}else{
						echo $data['title_post'];
					}
					?>
				</div>
			</div>
		</a>
		<?php
	}
	?>
</div>