<div class="container">
	<h1>Create new post</h1>
	<hr>
	<form action="../../code/update/update_user.php" method="POST">
		<div class="input-group marginsBottom" style="width: 700px;">
			<div class="input-group-prepend">
				<div class="input-group-text">Judul Postingan</div>
			</div>
			<input class="form-control" type="text" name="name_user" maxlength="70" required>
		</div>
		<div class="custom-file marginsBottom" style="width: 700px;">
			<label class="custom-file-label" id="label-image" for="image_post">Select the image</label>
			<input type="file" class="custom-file-input" id="image_post" name="image_post">
		</div>
	</form>
</div>

<script>
	$("#image_post").change(function() {
		filename = this.files[0].name;
		$("#label-image").text(filename);
	});
</script>