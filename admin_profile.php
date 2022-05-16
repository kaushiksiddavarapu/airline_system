<?php
	session_start();
?>
<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>
			View Booked Tickets
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
    			margin: 0px 390px
			}
			table {
			 border-collapse: collapse; 
			 margin-left: 10%;
			 margin-right: 10%;
			}
			tr/*:nth-child(3)*/ {
			 border: solid thin;
			}
			.set_nice_size{
				font-size: 17pt;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body style="background-image: url('images/cloud.jpg');background-repeat: no-repeat; background-size: 1600px 600px;background-position:bottom;">
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			Blu airways
		</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="index.html"><i class="fa fa-plane" aria-hidden="true"></i> FAQ</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>PROFILE</h2>
		<h3 class='set_nice_size'><center><u>Profile</u></center></h3>
		<?php
			$todays_date=date('Y-m-d');
			$thirty_days_before_date=date_create(date('Y-m-d'));
			date_sub($thirty_days_before_date,date_interval_create_from_date_string("30 days")); 
			$thirty_days_before_date=date_format($thirty_days_before_date,"Y-m-d");

			date_default_timezone_set('Asia/Kolkata');
			$now=time();
			$new_time = date('h:i:s ', strtotime($now)+7200);






			
			$customer_id=$_SESSION['login_user'];
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT admin_id,staff_id,name,email FROM admin";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$admin_id,$staff_id,$name,$email);
			mysqli_stmt_store_result($stmt);
            while(mysqli_stmt_fetch($stmt)) {
            echo ("name :\n".$name."\n");
            echo("admin_id : \n".$admin_id."\n");
            echo ("staff_id : ".$staff_id."\n");
            echo ("email : ".$email."\n");}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>
		<a href="edit_admin_profile.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
	</body>
</html>