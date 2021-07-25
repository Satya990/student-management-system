<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	  <style type="text/css">
		body {
 			background-image: url("campus.jpg");
			 background-repeat: no-repeat;
			 background-size: cover;
			


			
		} 
		#header{
			height: 10%;
			width: 100%;
			top: 0%;
			background-color: #34cfeb;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 90%;
			width: 15%;
			top: 10%;
			position: fixed;
			background-color:#ccffff;
			opacity: 0.9;
			position: fixed;
		}
		#right_side{
			height: 60%;
			width: 50%;
			padding:10px;
			
			background-color: whitesmoke; 
			opacity: 0.9;
			position: fixed;
			left: 25%;
			top: 15%;
			color: red;
			border: solid 1px black;
		}
		
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		input.search {
   			 width: 100%;  height: 2em;
			text-align: left;

		}
		.ab{
			color:black;
		}
		
	</style>
</head>
<body>
<div id="header">
		   <img src="vtu-logo.png" style="width:5%;height:100%;">&nbsp;&nbsp;&nbsp;&nbsp;Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
	</div>
	<br><br>
	<div id="right_side">
	<center><br><br>
		<h3>Admin LogIn Page</h3><br>
		<form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>
		
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: admin_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
				}
				
			}
		?>
	</center>
	</div>
</body>
</html>