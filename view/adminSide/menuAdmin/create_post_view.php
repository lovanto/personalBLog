<script src="../../ckeditor/ckeditor.js"></script>
<script src="../../ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="../../ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="../../ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

<h1>Create new post</h1>
<a href="#uploadImage">Upload</a>
<hr>
<form action="../../code/create/create_post.php" method="POST">
	<input class="form-control" type="hidden" name="id_user" id="id_user" value="<?=$_SESSION['id_user'];?>">
	<input class="form-control" type="hidden" name="name" id="name" value="<?=$_SESSION['name'];?>">
	<div class="row">
		<div class="col-sm minML-2 minMR-2">
			<main>
				<div class="adjoined-bottom">
					<div class="grid-container">
						<div class="grid-width-100">
							<textarea id="editor" name="editor" rows="10000">
								<h1>Hello world!</h1>
								<p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
							</textarea>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div class="col-md-3 border-left">
			<div class="input-group marginsBottom">
				<div class="input-group-prepend">
					<div class="input-group-text">Judul</div>
				</div>
				<input class="form-control" type="text" name="title_post" id="title_post" maxlength="70">
			</div>

			<div class="custom-file marginsBottom">
				<label class="custom-file-label" id="label-image" for="image_post">Pilih foto</label>
				<input type="file" class="custom-file-input" id="image_post" name="image_post">
			</div>

			<div class="marginsBottom">
				<div class="input-group-text mb-1">Deskripsi Postingan</div>
				<textarea class="form-control textUnResize" name="description_post" id="description_post" maxlength="245" rows="3"></textarea>
			</div>

			<div class="input-group marginsBottom">
				<div class="input-group-prepend">
					<div class="input-group-text">Kategori</div>
				</div>
				<select class="form-control" name="id_category" id="id_category">
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
	initSample();
</script>

<!-- Login -->
<div id="uploadImage" class="modal-window">
	<?php include '../../cloudinary/index.php'; ?>
</div>