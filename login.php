<?php session_start();?>
<html>
<head>
    <title>OPJU,Alumni</title>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<style>
	/* Full-width inputs */
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		/* Set a style for all buttons */
		button {
			background-color:#4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		/* Add a hover effect for buttons */
		button:hover {
			opacity: 0.7;
		}
		/* Add padding to containers */
		.container {
			padding:12px;
		}

		/* The "Forgot password" text */
		span.psw {
			float: center;
			padding-top:16px;
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
		}
		body{display: block;
		    background-image: url('opju21.jpg');
		    width:100%;
		    height:100%;
		    background-position: center;
			background-repeat: no-repeat;
			background-size: cover;}

			
	</style>
</head>
<body>
	<div class="row" id="r1">
    <div class="col-lg-12 col-md-6 col-sm-12" >
		<div class="container">
		<align><center>
		 <div class="jumbotron" style="background-color:#ffffff;margin-top:20px;width:40%;margin-bottom:80px;">
			<form action="" method="Post">
				  <div class="container">
					
					<label for="uname"><b>Email_id</b></label>
					<input type="text" placeholder="Enter Username" name="uname" required>

					<label for="password"><b>Password</b></label>
					<input type="password" id="myInput" name="password" required><br>
					<input type="checkbox" onclick="myFunction()"><b>Show Password<br><br>
					
					<label for="stu/teac"></label>
					<input type="radio" name="type" value="student" checked><b>Student
					<input type="radio" name="type" value="teacher">Teacher<br></b>
					
					<button type="submit" name="submit"><b>Login</button>
					<label>
					  <input type="checkbox" checked="checked" name="remember"><b>Remember me
					</label>
				  </div>
				  <div class="container" style="background-color:#C39BD3">
					 <span class="psw">Forgot <a href="#">password?</a></span>
				  </div>
			</form>
		    <?php 
				include_once("config.php");
				if(isset($_POST['submit'])) 
					{	$username= mysqli_real_escape_string($mysqli,$_POST['uname']);
						$pass= mysqli_real_escape_string($mysqli,$_POST['password']);
						$choice= mysqli_real_escape_string($mysqli,$_POST['type']);
						$_SESSION['login_user']=$username;
						
						if($choice=="teacher")
						{ 	 $result = mysqli_query($mysqli, "SELECT * FROM teacher WHERE Email_id='$username'");
								if(mysqli_num_rows($result)== 1)
								{ $resultp = mysqli_query($mysqli, "SELECT * FROM teacher WHERE Password='$pass' ");
									if(mysqli_num_rows($resultp))
									{	$_SESSION['choice_t']='teacher';
										if($username=="admin@gmail.com")
											header("Location:admin.php");
										else
											header("Location:profile.php");
									}
									else
									{echo "<font color='green'>Password Incorrect";}
								}
								else
									echo "Invalid User";
						}
						elseif($choice=="student")
						{	 $result = mysqli_query($mysqli, "SELECT * FROM alumni WHERE Email_id='$username'");
								if(mysqli_num_rows($result) == 1)
								{	$resultp = mysqli_query($mysqli, "SELECT * FROM alumni WHERE Password='$pass'");
									if(mysqli_num_rows($resultp))
									{   $_SESSION['choice_t']='student';
										header("Location:profile.php");
									}
									else
									echo "<font color='green'>Password Incorrect";
								}
								else
									echo "Invalid User";
						}
						
					}
			
			?>
		</div>
		</div>
	</div>
	</div>
	<script>
			function myFunction() {
				var x = document.getElementById("myInput");
				if (x.type == "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
	</script>
</body>
</html>
