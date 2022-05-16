<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome Administrator
		</title>
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
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="index.html"><i class="fa fa-plane" aria-hidden="true"></i> FAQ</a></li>
				<li><a href="admin_profile.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Profile</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>Welcome Administrator!</h2>
		<table cellpadding="5">
			
			<tr>
				<td class="admin_func"><a href="admin_view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> View List of Booked Tickets for a Flight</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="add_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Add Flight Schedule Details</a>
				</td>
			</tr>
			<!-- <tr>
				<td class="admin_func"><a href="modify_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Modify Flight Schedule Details</a>
				</td>
			</tr> -->
			<tr>
				<td class="admin_func"><a href="delete_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Delete Flight Schedule Details</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="add_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Add Aircrafts Details</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="activate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Activate Aircraft</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="deactivate_jet_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Deactivate Aircraft</a>
				</td>
			</tr>
		</table>
	</body>
</html>