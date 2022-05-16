<html>
	<head>
		<title>Logout Handler</title>
	</head>
	<body style="background-image: url('images/cloud.jpg');background-repeat: no-repeat; background-size: 1600px 600px;background-position:bottom;">
		<?php
			session_start();
			session_destroy();
			header("location: home_page.php");
		?>
	</body>
</html>