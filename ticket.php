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
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>PROFILE</h2>
		<h3 class='set_nice_size'><center><u>Profile</u></center></h3>
		<?php
		if(isset($_POST['Submit']))
		{
			$data_missing=array();
			if(empty($_POST['pnr']))
			{
				$data_missing[]='pnr';
			}
			else
			{
				$pnr=trim($_POST['pnr']);
			}
			
			$customer_id=$_SESSION['login_user'];
			if(empty($data_missing))
			{
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT pnr,date_of_reservation,flight_no,journey_date,class,payment_id,customer_id FROM ticket_details where customer_id=? and pnr=?";
			$stmt=mysqli_prepare($dbc,$query);
            mysqli_stmt_bind_param($stmt,"ss",$customer_id,$pnr);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$flight_no,$journey_date,$class,$payment_id,$custom_id);
			mysqli_stmt_store_result($stmt);
            while(mysqli_stmt_fetch($stmt)) {
				echo nl2br("pnr :".$pnr."\n");
				echo nl2br("customer_id : \n".$custom_id."\n");
				echo nl2br("date_of_reservation : ".$date_of_reservation."\n");
				echo nl2br("flight no : ".$flight_no."\n");
				echo nl2br("journey_date : ".$journey_date."\n");
				echo nl2br("class : ".$class."\n");
				echo nl2br("payment_id : ".$payment_id."\n");
        }
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
			}

			else
			{
				echo "The following data fields were empty! <br>";
				foreach($data_missing as $missing)
				{
					echo $missing ."<br>";
				}
			}
		}
		else
		{
			echo "Submit request not received";
		}

		?>
<form class="form-inline" method="post" action="generate.php">
<!-- <button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"aria-hidden="true"></i>
Generate PDF</button> -->
</form>
	</body>
</html>