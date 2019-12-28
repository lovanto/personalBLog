<form action="../code/signup_proses.php" method="POST">
	<div class="container">
		<div class="boldFont">Buat Akun Baru</div>
		<hr>
		<div class="input-group marginsBottom col-md-6">
			<div class="input-group-prepend">
				<div class="input-group-text">Nama Lengkap</div>
			</div>
			<input class="form-control" type="text" name="name_user" required>
		</div>
		<div class="input-group marginsBottom col-md-5">
			<div class="input-group-prepend">
				<div class="input-group-text">Username</div>
			</div>
			<input class="form-control" type="text" name="username_user" required>
		</div>
		<div class="input-group marginsBottom col-md-7">
			<div class="input-group-prepend">
				<div class="input-group-text">Email</div>
			</div>
			<input class="form-control" type="email" name="email_user" required>
		</div>
		<div class="row col-sm">
			<div class="input-group marginsBottom col-md-5">
				<div class="input-group-prepend">
					<div class="input-group-text">Kata Sandi</div>
				</div>
				<input class="form-control" type="password" name="password_user" id="password_user" required>
			</div>
			<div class="input-group marginsBottom col-md-7">
				<div class="input-group-prepend">
					<div class="input-group-text">Konfirmasi Kata Sandi</div>
				</div>
				<input class="form-control" type="password" name="password_user_confirm" id="password_user_confirm" onChange="checkPasswordMatch();" required>
			</div>
			<div class="container"><p id="validate-status"></p></div>
		</div>
		<div align="center"><input class="btn btn-primary col-md-2" type="submit" name="submit" value="Daftar"></div>
	</div>
</form>

<script>
	$(document).ready(function() {
		$("#password_user").keyup(validate);
		$("#password_user_confirm").keyup(validate);
	});

	function validate() {
		var password_user = $("#password_user").val();
		var password_user_confirm = $("#password_user_confirm").val();

		if(password_user == password_user_confirm) {  
			$("#validate-status").text("").css('color', 'red');    
		}
		else {
			$("#validate-status").text("Password tidak sesuai").css('color', 'red');  
		}
	}

</script>