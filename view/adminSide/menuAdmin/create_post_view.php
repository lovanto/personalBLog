<h1>Create new post</h1>
<hr>
<!-- <form action="../../code/update/update_user.php" method="POST"> -->
	<div class="row">
		<div class="col-sm border-right">
			<div class="row container">
				<div class="marginsBottom border mr-2">
					<button class="btn btn-default m-1 border border-rounded zoomButton minFont" name="btn-compose" id="btn-compose" title="Compose mode">Compose</button>
					<button class="btn btn-default mr-1 mt-1 mb-1 border border-rounded zoomButton minFont" name="btn-html" id="btn-html" title="HTML mode">HTML</button>
				</div>
				<div class="marginsBottom border mr-2">
					<button class="btn btn-default m-1 boldFont border border-rounded zoomButton minFont" name="btn-compose" id="btn-compose" title="Bold">B</button>
					<button class="btn btn-default mr-1 mt-1 mb-1 border border-rounded zoomButton minFont" name="btn-html" id="btn-html" title="Italic" style="font-style: italic;">I</button>
					<button class="btn btn-default mr-1 mt-1 mb-1 border border-rounded zoomButton minFont" name="btn-compose" id="btn-compose" title="Underline" style="text-decoration: underline;">U</button>
					<button class="btn btn-default mr-1 mt-1 mb-1 border border-rounded zoomButton minFont" name="btn-html" id="btn-html" title="Strikethrough" style="text-decoration: line-through;">ABC</button>
				</div>
				<div class="marginsBottom border mr-2">
					<button class="btn btn-default m-1 boldFont border border-rounded zoomButton" name="btn-compose" id="btn-compose" title="Text color"><img src="../../images/icon/text-editor.png" width="15"></button>
					<button class="btn btn-default mr-1 mt-1 mb-1 border border-rounded zoomButton" name="btn-html" id="btn-html" title="Text background color" style="font-style: italic;"><img src="../../images/icon/text-background.png" width="20"></button>
				</div>
				<div class="marginsBottom border mr-2">
					<button class="btn btn-default m-1 boldFont border border-rounded zoomButton minFont" name="btn-compose" id="btn-compose" title="Insert link">Link</button>
					<button class="btn btn-default mr-1 mt-1 mb-1 border border-rounded zoomButton" name="btn-html" id="btn-html" title="Insert image" style="font-style: italic;"><img src="../../images/icon/picture.png" width="20"></button>
					<button class="btn btn-default mr-1 mt-1 mb-1 border border-rounded zoomButton" name="btn-compose" id="btn-compose" title="Insert video" style="text-decoration: underline; "><img src="../../images/icon/video-player.png" width="20"></button>
				</div>
				<div class="marginsBottom border mr-2">
					<button class="btn btn-default m-1 boldFont border border-rounded zoomButton minFont" name="btn-compose" id="btn-compose" title="Align">Align</button>
					<button class="btn btn-default mr-1 mt-1 mb-1 border border-rounded zoomButton" name="btn-html" id="btn-html" title="Numeric list" style="font-style: italic;"><img src="../../images/icon/numbered-list.png" width="20"></button>
					<button class="btn btn-default mr-1 mt-1 mb-1 border border-rounded zoomButton" name="btn-compose" id="btn-compose" title="Bullet list" style="text-decoration: underline; "><img src="../../images/icon/bullet-list.png" width="20"></button>
				</div>
			</div>
			<div>
				<div class="input-group-text mb-1">Konten Postingan</div>
				<textarea class="form-control textUnResize" name="comment_content" id="comment_content" rows="20" style="overflow: scroll;">adwadawdawdwad</textarea>
				<textarea class="form-control textUnResize visible-false" name="comment_content_html" id="comment_content_html" rows="20" style="overflow: scroll;">adaw</textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group marginsBottom">
				<div class="input-group-prepend">
					<div class="input-group-text">Judul</div>
				</div>
				<input class="form-control" type="text" name="name_user" maxlength="70">
			</div>

			<div class="custom-file marginsBottom">
				<label class="custom-file-label" id="label-image" for="image_post">Pilih foto</label>
				<input type="file" class="custom-file-input" id="image_post" name="image_post">
			</div>

			<div class="marginsBottom">
				<div class="input-group-text mb-1">Deskripsi Postingan</div>
				<textarea class="form-control textUnResize" name="comment_content" id="comment_content" maxlength="245" rows="3"></textarea>
			</div>

			<div class="input-group marginsBottom">
				<div class="input-group-prepend">
					<div class="input-group-text">Kategori</div>
				</div>
				<select class="form-control">
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
	<!-- </form> -->

	<script>
		$(document).ready(function() {
			document.getElementById("btn-compose").classList.add('activeButton'); 
			$("#btn-compose").click(showCompose);
			$("#btn-html").click(showHtml);
		});

		$("#image_post").change(function() {
			filename = this.files[0].name;
			$("#label-image").text(filename);
		});

		function showCompose() {
			document.getElementById("comment_content").classList.add('visible-true'); 
			document.getElementById("comment_content_html").classList.add('visible-false');  
			document.getElementById("comment_content_html").classList.remove('visible-true'); 
			document.getElementById("btn-compose").classList.add('activeButton'); 
			document.getElementById("btn-html").classList.remove('activeButton'); 
		}

		function showHtml() {
			document.getElementById("comment_content_html").classList.add('visible-true'); 
			document.getElementById("comment_content").classList.add('visible-false'); 
			document.getElementById("comment_content").classList.remove('visible-true'); 
			document.getElementById("btn-html").classList.add('activeButton'); 
			document.getElementById("btn-compose").classList.remove('activeButton'); 
		}

	</script>