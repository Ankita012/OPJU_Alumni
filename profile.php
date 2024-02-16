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
	.sidebar{   
            background-color:black;
            height:700px;
        }
	body { 
			background-color:#FFFFFF;
		}
	.imgcontainer {
		    padding-top:70px;
			text-align:center;
			padding-bottom:40px;
		}
	img.avatar {
			width:40%;
			border-radius:20%;
			
		}
	a  {
			padding-top:20px;
			font-size:18px;
			color:black; !important
		}
	li:hover {
			opacity: 0.5;
		}
	.jumbotron{
		margin-top:80px;
		padding:20px 30px 30px 20px;
		margin-left:80px;
		width:65%;
		font-size:16px;
	}
	button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}
	button:hover {
			opacity: 0.7;
		}
	input[type=text] {
		    border: 1px solid #ccc;
			box-sizing:content-box;
		}
</style>
</head>
<body>
	<div id="header">
	
    </div>
	<div class="row" id="r1">
        <div class= "col-lg-2 sidebar" id="c1">
		    <div class="imgcontainer">
					<img src="icon.png" alt="Avatar" class="avatar">
					<p style="color:white; font-size:14px; margin:4px 1px 6px;">
					<?php $email=$_SESSION['login_user']; echo "$email";?></p>

			</div>
			<ul class="list-group">
				<li class="list-group-item active"><a href="#j1">Profile</a></li>
				<li class="list-group-item "><a href="changepass.php">Change Password</a></li>
			    <li class="list-group-item "><a href="update.php">Edit Details</a></li>
				<li class="list-group-item "><a href="alumni_form.php">Alumni Forum</a></li>
			</ul>
		</div>
		<div class="col-lg-10" id="c2">
			<div class="jumbotron" id="j1">
			   <h2>Profile info</h2><hr><br>
				<?php
					    include_once("config.php");
						$email=$_SESSION['login_user'];
						$choice=$_SESSION['choice_t'];
						if($choice=="student")
						{		$result = mysqli_query($mysqli, "SELECT * FROM alumni WHERE Email_id='$email'");
								if( $row = mysqli_fetch_array($result))
								{
									echo "Name: $row[Name] <br />","Email_id: $row[Email_id] <br />","School: $row[School] <br />",
									"Course: $row[Course] <br />","Branch: $row[Branch] <br />",
									"Session: $row[Session] <br />","Mobile_number: $row[Mobile_number]";
								}		
						}
						else
						{		$result = mysqli_query($mysqli, "SELECT * FROM teacher WHERE Email_id='$email'");
								if( $row = mysqli_fetch_array($result))
								{
									echo "Email_id: $row[Email_id] <br />","School: $row[School] <br />",
									"Course: $row[Course] <br />","Branch: $row[Branch] <br />";
								}	
							
						}
				?>
			</div>	
		</div>
	</div>
	<div id="footer">
	</div>
	<script>
			$(function(){
				$("#header").load("nav.html");
				$("#footer").load("footer.html");
		
			});
	</script>
	
</body>
</html>
