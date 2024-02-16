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
            height:780px;
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
		margin-top:60px;
		padding:40px 40px 40px 40px;
		margin-left:80px;
		width:55%;
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
				<li class="list-group-item active"><a href="#j1">Add Alumni</a></li>
			    <li class="list-group-item"><a href="createteacher.php">Add Teachers</a></li>
				<li class="list-group-item "><a href="delete.php">Delete account</a></li>
				<li class="list-group-item "><a href="alumnilist.php">Alumni List</a></li>
				<li class="list-group-item "><a href="teacherlist.php">Teacher List</a></li>
				<li class="list-group-item "><a href="invite.php">Invite Alumni</a></li>
			</ul>
		</div>
		<div class="col-lg-10" id="c2">
		  <div class="jumbotron" id="j1">
			   <h3>Create Alumna's Account</h3><hr><br>
				<form action="" method="post" name="formaddAlumni">
					<div class="form-group">
					  <label for="inputdefault">Email-ID:</label>
					  <input class="form-control" name="emailid" type="text" required>
					  <p style="font-size:12px"><b>You can add multiple user by putting ' ; ' beetween each emailId<b></style></p>
					</div>
					<div class="form-group">
					  <label for="sel1">School</label>
					  <select class="form-control" name="school" required>
						<option>-</option>
						<option>Engineering</option>
						<option>Management</option>
						<option>Science</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="sel1">Course</label>
					  <select class="form-control" name="course" required>
						<option>-</option>
						<option>B.tech</option>
						<option>M.tech</option>
						<option>BBA</option>
						<option>MBA</option>
						<option>P.hd</option>
						<option>BBA</option>
						<option>MBA</option>
						<option>B.sc</option>
						<option>M.sc</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="sel1">Branch</label>
					  <select class="form-control" name="branch" required>
					    <option>-</option>
						<option>CSE</option>
						<option>MECH</option>
						<option>CIVIL</option>
						<option>EEE</option>
						<option>META</option>
						<option>Managemnet</option>
						<option>Maths</option>
						<option>Physics</option>
						<option>Chemistry</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="sel1">Session</label>
					  <select class="form-control" name="session" required>
						<option>-</option>
						<option>2007-11</option>
						<option>2008-12</option>
						<option>2009-13</option>
						<option>2010-14</option>
						<option>2011-15</option>
						<option>2012-16</option>
						<option>2013-17</option>
						<option>2014-18</option>
						<option>2015-19</option>
						<option>2016-20</option>
						<option>2017-21</option>
					  </select>
					</div>
					<button type="submit" name="submit" class="btn btn-success">Submit</button>
				</form>
			<?php
				//including the database connection file
				include_once("config.php");
				if(isset($_POST['submit'])) 
					{	$name="ABC";
						$password="987654321";
						$Mobile_no= "00000";
						$email= mysqli_real_escape_string($mysqli,$_POST['emailid']);
						$schools= mysqli_real_escape_string($mysqli,$_POST['school']);
						$courses= mysqli_real_escape_string($mysqli,$_POST['course']);
						$brances= mysqli_real_escape_string($mysqli,$_POST['branch']);
						$year= mysqli_real_escape_string($mysqli,$_POST['session']);
						$result = mysqli_query($mysqli, "SELECT * FROM alumni WHERE Email_id='$email'");
							if(mysqli_num_rows($result) != 1)
							{  $result1 = mysqli_query($mysqli, "INSERT INTO alumni VALUES('$name','$password','$email','$schools','$courses','$brances','$year','$Mobile_no')");  
							   echo "<font color='green'>Alumna Registered";
							}
							else
							  echo "<font color='green'>This email id is already registered!! Please enter different emailid";
						
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
