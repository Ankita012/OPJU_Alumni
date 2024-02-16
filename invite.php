<?php session_start();?>
<html>
<head>
<title>OPJU,Alumni admin page</title>
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
			background-color:#F5F5F7;
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
	a   {
			padding-top:20px;
			font-size:18px;
			color:black; !important
		}
	li:hover {
			opacity: 0.5;
		}
	.jumbotron{
		margin-top:75px;
		padding-left:10px;
		margin-left:200px;
		width:45%;
		font-size:18px;
	}
	button {
			background-color:#4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width:30%;
		}
	button:hover {
			opacity:0.6;
	}
	form-control{
		width:100%;
		border: 1px solid #ccc;
		box-sizing:content-box;
		margin-right:10px;
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
			</div>
			<ul class="list-group">
				<li class="list-group-item "><a href="admin.php">Profile</a></li>
				<li class="list-group-item"><a href="createalumna.php">Add Alumni</a></li>
			    <li class="list-group-item "><a href="createteacher.php">Add Teachers</a></li>
				<li class="list-group-item "><a href="delete.php">Delete account</a></li>
				<li class="list-group-item"><a href="alumnilist.php">Alumni List</a></li>
				<li class="list-group-item "><a href="teacherlist.php">Teacher List</a></li>
				<li class="list-group-item active"><a href="#j1">Invite Alumni</a></li>
				<li class="list-group-item "><a href="index.php">Main Site</a></li>
			</ul>
		</div>
		<div class="col-lg-10" id="c2">
			<div class="jumbotron" id="j1">
			   <h3>Invite Alumni</h3><hr><br>
				<form action="" method="post" name="formaddteacher">
					<div class="form-group">
					  <b>Email_ID<input class="form-control" name="emailid" type="text" required>
					  <p style="font-size:12px"><b>You can add multiple user by putting ' ; ' beetween each emailId</style></p>
					  Message:<br><textarea class="form-control" rows="5" name="msg" required></textarea><br>
					</div>
					<align><center><button type="submit" name="invite">invite</button></align>
				</form>
				<?php
					//including the database connection file
					include_once("config.php");
					error_reporting(-1);
					ini_set('display_errors', 'On');
					set_error_handler("var_dump");
					if(isset($_POST['invite'])) 
						{	$email= mysqli_real_escape_string($mysqli,$_POST['emailid']);
							$result = mysqli_query($mysqli, "SELECT * FROM alumni WHERE Email_id='$email'");
							if(mysqli_num_rows($result))
							{	$to = $email;
								$from ="ankita.kaushik012@gmail.com";
								$subject="Invition to join opju alumni association";
								$message =$_POST['msg'];
								$headers = "From:" .$from;
								mail($to,$subject,$message,$headers);
								echo "message send successfully";
							}
							else 
								echo "user not exit";
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
