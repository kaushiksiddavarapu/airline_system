<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Aircrafts Details
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
    			margin: 0px 60px
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
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="index.html"><i class="fa fa-plane" aria-hidden="true"></i> FAQ</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="edit_cust_profile_form_handler.php" method="post">
			<h2>ENTER THE DETAILS</h2>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The details has been successfully updated.</strong>
						<br><br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>error! couldn't update details.</strong>
						<br><br>";
				}
			?>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter name</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="name" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter email</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="email" required></td>
				</tr>
			</table>
			<br>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			</div>
		</form>
	</body>
</html>