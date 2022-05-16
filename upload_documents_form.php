<html>
	<head>
		<title>
			Create New User Account
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 135px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	</head>
	<body style="background-image: url('images/cloud.jpg');background-repeat: no-repeat; background-size: 1600px 600px;background-position:bottom;">
	<img class="logo" src="images\air.jpg"/> 
	<h1 id="title" style="color:rgb(14, 118, 187);font-family:'Dancing Script', cursive;">
			Blu Airways
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="index.html"><i class="fa fa-plane" aria-hidden="true"></i> FAQ</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<br>
        <form action="upload_documents_form_handler.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
	<input type="file" name="upload" accept=".png,.gif,.jpg,.webp" required>
  <input type="submit" name="submit" value="Upload Image">
</form>
</html>