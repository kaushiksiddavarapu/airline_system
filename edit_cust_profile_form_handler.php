<?php
	session_start();
?>
<html>
	<head>
		<title>Edit Profile Details</title>
	</head>
	<body style="background-image: url('images/cloud.jpg');background-repeat: no-repeat; background-size: 1600px 600px;background-position:bottom;">
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['name']))
				{
					$data_missing[]='name';
				}
				else
				{
					$name=trim($_POST['name']);
				}

				if(empty($_POST['email']))
				{
					$data_missing[]='email';
				}
				else
				{
					$email=$_POST['email'];
				}

                $user_id=$_SESSION['login_user'];

				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="UPDATE customer SET name=?, email=? WHERE customer_id=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"sss",$name,$email,$user_id);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					//echo $affected_rows."<br>";
					// mysqli_stmt_bind_result($stmt,$cnt);
					// mysqli_stmt_fetch($stmt);
					// echo $cnt;
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					/*
					$response=@mysqli_query($dbc,$query);
					*/
					if($affected_rows==1)
					{
						echo "Successfully Submitted";
						header("location: edit_cust_profile.php?msg=success");
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
						header("location: edit_cust_profile.php?msg=failed");
					}
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
	</body>
</html>