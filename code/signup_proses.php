<?php
if ($_POST['Submit'] == "Daftar") {
$name_user = $_POST['name_user'];
$username_user = $_POST['username_user'];
$email_user = $_POST['name_user'];
$password_user = $_POST['password_user'];
$class = "User";

$sql = mysqli_query($Open, "
	INSERT INTO user_data (name_user, username_user, email_user, password_user, class) 
	VALUES ('$name_user', '$username_user', '$email_user', '$password_user', '$class')
	");
}else{

}

?>