<h1>Create new post</h1>
<hr>
<form action="../../code/update/update_user.php" method="POST">
	<div class="row">
		<div class="col-sm border-right">
			<div>
				<div class="input-group-text mb-1">Konten Postingan</div>
				<textarea class="form-control textUnResize" name="comment_content" id="comment_content" rows="20" style="overflow: scroll;" required></textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group marginsBottom">
				<div class="input-group-prepend">
					<div class="input-group-text">Judul</div>
				</div>
				<input class="form-control" type="text" name="name_user" maxlength="70" required>
			</div>

			<div class="custom-file marginsBottom">
				<label class="custom-file-label" id="label-image" for="image_post">Pilih foto</label>
				<input type="file" class="custom-file-input" id="image_post" name="image_post">
			</div>

			<div class="marginsBottom">
				<div class="input-group-text mb-1">Deskripsi Postingan</div>
				<textarea class="form-control textUnResize" name="comment_content" id="comment_content" maxlength="245" rows="3" required></textarea>
			</div>

			<div class="input-group marginsBottom">
				<div class="input-group-prepend">
					<div class="input-group-text">Kategori</div>
				</div>
				<select class="form-control" required>
					<option value="1">Programming</option>
					<option value="2">Tutorial</option>
					<option value="3">Emulator</option>
				</select>
			</div>

			<div class="row container marginsBottom">
				<input class="btn btn-primary mr-2 col-sm" type="submit" name="submit" value="Publikasikan">
				<input class="btn btn-default border col-sm" type="submit" name="submit" value="Simpan">
			</div>
		</div>
	</div>
</form>

<script>
	$("#image_post").change(function() {
		filename = this.files[0].name;
		$("#label-image").text(filename);
	});
</script>