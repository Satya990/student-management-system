<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
			opacity: 0.8;
			position: fixed;
			left: 25%;
			top: 20%;
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
		   <img src="vtu-logo.png" style="width:5%;height:100%;">&nbsp;&nbsp;&nbsp;&nbsp;Student Management System
		
	</div><br><br>
	<div id="right_side">
	<center><br><br><br><br>
	<h3>Student Management System</h3><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		<input type="submit" name="student_login" value="Student Login" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
	</div>
</body>
</html>