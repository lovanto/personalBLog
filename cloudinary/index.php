<?php
require 'vendor/autoload.php';
require 'config.php';

if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$slug = $nama;
	$gambar = $_FILES['file']['name'];
	$file_tmp = $_FILES['file']['tmp_name'];

	\Cloudinary\Uploader::upload($file_tmp, array('public_id' => $nama, "timeout" => 120));
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