<?php

$id_user = $_GET['id_user'];
$getData = "SELECT * FROM user_data WHERE id_user = '$id_user'";
$queryData = mysqli_query($Open, $getData);
$show = mysqli_fetch_array($queryData);

?>
<div class="container">
	<h1>Update user</h1>
	<hr>
	<form action="../../code/update.php?type=user" method="POST">
		<div class="container">
			<input type="hidden" name="id_user" value="<?=$show['id_user']?>">

			<div class="input-group marginsBottom col-md-6">
				<div class="input-group-prepend">
					<div class="input-group-text">Nama Lengkap</div>
				</div>
				<input class="form-control" type="text" name="name_user" maxlength="75" value="<?=$show['name_user']?>" required>
			</div>

			<div class="input-group marginsBottom col-sm">
				<div class="input-group-prepend">
					<div class="input-group-text">Username</div>
				</div>
				<input class="form-control" type="text" name="username_user" id="username_user" value="<?=$show['username_user']?>" maxlength="20" required>
				<div class="col-md-5"><p id="validate-status_username"></p></div>
			</div>

			<div class="input-group marginsBottom col-md-7">
				<div class="input-group-prepend">
					<div class="input-group-text">Email</div>
				</div>
				<input class="form-control" type="email" name="email_user" id="email_user" value="<?=$show['email_user']?>" maxlength="100" required>
			</div>

			<div class="row col-sm">
				<div class="input-group marginsBottom col-md-5">
					<div class="input-group-prepend">
						<div class="input-group-text">Kata Sandi</div>
					</div>
					<input class="form-control" type="password" name="password_user" id="password_user" value="<?=$show['password_user']?>" maxlength="20" required>
				</div>

				<div class="input-group marginsBottom col-md-7">
					<div class="input-group-prepend">
						<div class="input-group-text">Konfirmasi Kata Sandi</div>
					</div>
					<input class="form-control" type="password" name="password_user_confirm" id="password_user_confirm" maxlength="20" required>
				</div>
				<div class="container"><p id="validate-status"></p></div>
			</div>

			<div class="input-group marginsBottom col-md-3">
				<div class="input-group-prepend">
					<div class="input-group-text">Hak Akses</div>
				</div>
				<select name="akses" id="akses" class="form-control">
					<option value="User"
					<?php
					if ($show['class_user'] == "User") {
						echo "selected";
					}
					?>
					>User</option>
					<option value="Admin"
					<?php
					if ($show['class_user'] == "Admin") {
						echo "selected";
					}
					?>
					>Admin</option>
				</select>
			</div>

			<div align="center"><input class="btn btn-primary col-md-2 disabled" type="submit" name="submit" id="submit" value="Perbarui Data"></div>
		</div>
	</form>
</div>

<script>
	$(document).ready(function() {
		$("#password_user").keyup(validate);
		$("#password_user_confirm").keyup(validate);
		$("#username_user").keyup(validate_user);
	});

	function validate() {
		var password_user = $("#password_user").val();
		var password_user_confirm = $("#password_user_confirm").val();

		if (password_user.length <= 20 && password_user.length >= 8) {
			$("#validate-status").text("").css('color', 'red');  
			document.getElementById("submit").classList.remove('disabled'); 

			if(password_user == password_user_confirm) {  
				$("#validate-status").text("").css('color', 'red');    
				document.getElementById("submit").classList.remove('disabled'); 
				validate_user();
			}
			else {
				$("#validate-status").text("Password tidak sesuai.").css('color', 'red');  
				document.getElementById("submit").classList.add('disabled'); 
			}

		} else {
			$("#validate-status").text("Password minimal 8 karakter dan maksimal 20 karakter.").css('color', 'red');  
			document.getElementById("submit").classList.add('disabled'); 
		}
	}

	function validate_user() {
		var username_user = $("#username_user").val();

		if (username_user.length <= 20 && username_user.length >= 8) {
			$("#validate-status_username").text("").css('color', 'red'); 

			if (username_user!='') {
				$.post('../../code/check_user_exist.php', {username:username_user},

					function(data) {
						$('#validate-status_username').html(data);
					})
			}else{
				$('#validate-status_username').html('');
			}
		} else {
			$("#validate-status_username").text("Username minimal 8 karakter dan maksimal 20 karakter.").css('color', 'red');  
			document.getElementById("submit").classList.add('disabled'); 
		}
	}
</script>