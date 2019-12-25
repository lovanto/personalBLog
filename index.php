<?php
	include 'conn.php';
?>

<!DOCTYPE html>
<html lang="ina">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lovanto Blog</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<!-- CSS -->
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<!-- Icon -->
	<link rel="icon" href="icon.ico" type="image/x-icon" />
</head>
<body>

	<!-- HEADER -->
	<?php include 'view/header.php';?>
	<!-- END HEADER -->

	<!-- BODY -->
	<?php include 'view/body.php';?>
	<!-- END BODY -->

	<!-- FOOTER -->
	<?php include 'view/footer.php';?>
	<!-- END FOOTER -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.0.0.js"></script>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$(window).scroll( function(){
			$('.hideme').each( function(i){
				var bottom_of_object = $(this).offset().top + $(this).outerHeight();
				var bottom_of_window = $(window).scrollTop() + $(window).height();
				if( bottom_of_window > bottom_of_object ){
					$(this).animate({'opacity':'1'},1000);
				}
			}); 
		});
	});
</script>