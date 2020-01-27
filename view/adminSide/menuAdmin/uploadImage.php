<?php
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$slug = $nama;
	$gambar = $_FILES['file']['name'];
	$fileSize = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

	$errors = [];

	if ($fileSize > 2000000) {
		?>
		<script>
			alert('This file is more than 2MB. Sorry, it has to be less than or equal to 2MB');
		</script>
		<?php
	}else{
		if (empty($errors)) {
			\Cloudinary\Uploader::upload($file_tmp, array('public_id' => $nama, "timeout" => 120));
			$data_image = $_POST['nama'];

			$sql = "INSERT INTO image(data_image) VALUES ('$nama')";
			$query = mysqli_query($Open, $sql);
			if ($query) {

			}else{
				echo "adwda";
			}
			?>
			<script>
				alert('The file <?=basename($nama)?> has been uploaded');
			</script>
			<?php
			echo "";
		}else {
			foreach ($errors as $error) {
				echo $error . "These are the errors" . "\n";
			}
		}
	}
}
?>

<div>
	<a href="#" title="Close" class="modal-close"><font size="5">&times;</font></a>
	<h1>Upload Image</h1>
	<hr>
	<div>
		<form method="POST" enctype="multipart/form-data">
			<input class="form-control marginsBottom" type="text" name="nama" placeholder=" Nama foto" required style="width: 350px;">
			<?php echo cl_image_upload_tag('image_id'); ?>
			<input class="btn btn-primary marginsTop" type="submit" name="simpan" value="Simpan">
		</form>
	</div>
</div>