<?php
require 'vendor/autoload.php';
require 'config.php';

if (isset($_POST['Simpan'])) {
	$nama = $_POST['nama'];
	$slug = $_POST['slug'];
	$gambar = $_FILES['file']['name'];
	$file_tmp = $_FILES['file']['tmp_name'];

	\Cloudinary\Uploader::upload($file_tmp, array('public_id' => $slug));
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Test Cloudinary</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="nama">
		<input type="text" name="slug">
		<?php echo cl_upload_tag('image_id');?>
		<input type="submit" name="Simpan" value="Simpan">
	</form>
	<?php echo cl_image_tag('sample');?>
	<br>
	<br>
	<hr>
</body>
</html>