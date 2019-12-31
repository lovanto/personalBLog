<?php
mysqli_query($Open ,"UPDATE post SET 
	title_post='$title_post', 
	image_post='$image_post', 
	description_post=description_post, 
	id_category=id_category, 
	hit='$hit' 
	WHERE id_post='$id_post'") 
or die(mysqli_error($Open));
?>