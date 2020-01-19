<?php
include '../../conn.php';
if (isset($_GET['id_post']) != "") {
	$id_post = $_GET['id_post'];
	$getData = "SELECT * FROM post WHERE id_post = '$id_post'";
	$queryData = mysqli_query($Open, $getData);
	$show = mysqli_fetch_array($queryData);
	$title_post = $show['title_post'];
	$image_post = $show['image_post'];
	$description_post = $show['description_post'];
	$content_post = $show['content_post'];
	$id_user = $show['id_user'];
	$writed_by = $show['writed_by'];
	$date_posted = $show['date_posted'];
	$id_category = $show['id_category'];
	$hit = $show['hit'];
	$status_post = $show['status_post'];
}else{
	$title_post = "";
	$image_post = "";
	$description_post = "";
	$content_post = "";
	$id_user = "";
	$writed_by = "";
	$date_posted = "";
	$id_category = "";
	$hit = "";
	$status_post = "";
}
?>

<script src="../../ckeditor/ckeditor.js"></script>
<script src="../../ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="../../ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="../../ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

<h1>Create new post</h1>
<a href="#uploadImage">Upload New Image</a>
<hr>
<form action="../../code/create.php" method="POST">
	<input type="hidden" name="id_user" id="id_user" value="<?=$_SESSION['id_user'];?>">
	<input type="hidden" name="writed_by" id="writed_by" value="<?=$_SESSION['name'];?>">
	<input type="hidden" name="date_posted" id="date_posted" value="<?=$_SESSION['date_posted'];?>">
	<input type="hidden" name="hit" id="hit" value="<?=$show['hit'];?>">
	<input type="hidden" name="status_post" id="status_post" value="<?=$show['status_post'];?>">
	<div class="row">
		<div class="col-sm minML-2 minMR-2">
			<main>
				<div class="adjoined-bottom">
					<div class="grid-container">
						<div class="grid-width-100">
							<textarea id="editor" name="editor">
								<?=$show['content_post']?>
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
				<input class="form-control" type="text" name="title_post" id="title_post" value="<?=$show['title_post']?>" maxlength="70">
			</div>

			<div class="custom-file marginsBottom">
				<label class="custom-file-label" id="label-image" for="image_post">Pilih foto</label>
				<input type="file" class="custom-file-input" id="image_post" name="image_post">
			</div>

			<div class="marginsBottom">
				<div class="input-group-text mb-1">Deskripsi Postingan</div>
				<textarea class="form-control textUnResize" name="description_post" id="description_post" maxlength="245" rows="3"><?=$show['description_post']?></textarea>
			</div>

			<div class="input-group marginsBottom">
				<div class="input-group-prepend">
					<div class="input-group-text">Kategori</div>
				</div>
				<select class="form-control" name="id_category" id="id_category">
					<option value="1"
					<?php
					if ($show['id_category'] == "1") {
						echo "selected";
					}
					?>
					>Programming</option>
					<option value="2"
					<?php
					if ($show['id_category'] == "2") {
						echo "selected";
					}
					?>
					>Tutorial</option>
					<option value="3"
					<?php
					if ($show['id_category'] == "3") {
						echo "selected";
					}
					?>
					>Emulator</option>
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
	<?php include 'uploadImage.php'; ?>
</div>