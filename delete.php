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
            height:760px;
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
	a  {
			padding-top:20px;
			font-size:18px;
			color:black; !important
		}
	li:hover {
			opacity: 0.5;
		}
	.jumbotron{
		margin-top:60px;
		padding:40px 40px 40px 40px;
		margin-left:80px;
		width:75%;
		font-size:16px;
	}
	button {
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
			</div>
			<ul class="list-group">
				<li class="list-group-item "><a href="admin.php">Profile</a></li>
				<li class="list-group-item active"><a href="createalumna.php">Add Alumni</a></li>
			    <li class="list-group-item"><a href="createteacher.php">Add Teachers</a></li>
				<li class="list-group-item "><a href="#j1">Delete account</a></li>
				<li class="list-group-item "><a href="alumnilist.php">Alumni List</a></li>
				<li class="list-group-item "><a href="teacherlist.php">Teacher List</a></li>
				<li class="list-group-item "><a href="invite.php">Invite Alumni</a></li>
			</ul>
		</div>
		<div class="col-lg-10" id="c2">
		  <div class="jumbotron" id="j1">
			   <h3>Delete Account</h3><hr><br>
				<form action="" method="post" name="formaddAlumni">
					<div class="form-group">
					  <label for="inputdefault">Email-ID:</label>
					  <input class="form-control" name="emailid" type="text" required>
					  <p style="font-size:12px"><b>You can add multiple user by putting ' ; ' beetween each emailId<b></style></p>
					</div>
					<label for="stu/teac"></label>
					<input type="radio" name="type" value="student" checked><b>Student
					<input type="radio" name="type" value="teacher">Teacher<br></b>
					
					<button type="submit" name="submit" class="btn btn-success">Delete</button>
				</form>
			<?php
				//including the database connection file
				include_once("config.php");
				if(isset($_POST['submit'])) 
					{	
						$email= mysqli_real_escape_string($mysqli,$_POST['emailid']);
						$choice= mysqli_real_escape_string($mysqli,$_POST['type']);
						if($choice=="student")
						{	$result = mysqli_query($mysqli, "SELECT * FROM alumni WHERE Email_id='$email'");
								if(mysqli_num_rows($result))
								{  $result1 = mysqli_query($mysqli, "DELETE FROM alumni WHERE Email_id='$email'");  
								   echo "<font color='green'>Deleted";
								}
								else
								  echo "<font color='green'>This email_id not exist.Please enter correct emailid";
						}
						else
						{	$result = mysqli_query($mysqli, "SELECT * FROM teacher WHERE Email_id='$email'");
								if(mysqli_num_rows($result))
								{  $result1 = mysqli_query($mysqli, "DELETE FROM teacher WHERE Email_id='$email'");  
								   echo "<font color='green'>Deleted";
								}
								else
								  echo "<font color='green'>This email_id not exist.Please enter correct emailid";
							
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
