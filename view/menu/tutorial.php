<?php
$sql = mysqli_query($Open, "SELECT * FROM post WHERE id_category = 2");
while ($data = mysqli_fetch_array($sql)) {
	?>
	<div class="content">
		<img class="card" src="<?=$data['image_post']?>" width="350px">
		<h4><?=$data['title_post']?>
		</h4>
		<div class="marginsTop">
			<?php
			if (strlen($data['description_post']) > 300)  {
				echo substr($data['description_post'],0,300)."...";
			}else{
				echo $data['description_post'];
			}
			?>
		</div>
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
	<?php
}
?>