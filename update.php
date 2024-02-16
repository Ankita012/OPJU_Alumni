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
            height:1000px;
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
			padding-top:30px;
			font-size:18px;
			color:black; !important
		}
	li:hover {
			opacity: 0.6;
		}
	.jumbotron{
		margin-top:63px;
		padding:20px 30px 30px 2px;
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
			width:20%;
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
				<li class="list-group-item "><a href="profile.php">Profile</a></li>
				<li class="list-group-item "><a href="changepass.php">Change Password</a></li>
			    <li class="list-group-item active"><a href="#j1">Edit Details</a></li>
				<li class="list-group-item "><a href="alumni_form.php">Alumni Forum</a></li>
			</ul>
		</div>
		<div class="col-lg-10" id="c2">
			<div class="jumbotron" id="j1">
			   <h2>Edit Details</h2><hr><br>
			    <form action="" method='POST'>
					<div class="form-group">
					  <label for="emailid">Email_id</label>
					  <input class="form-control" name="emailid" type="text" required>
					 <style="font-size:5px;">*Email address required</style>
					</div>
					<div class="form-group">
					  <label for="name">Name:</label>
					  <input class="form-control" name="name" type="text">
					</div>
					<div class="form-group">
					  <label for="school">School</label>
					  <select class="form-control" name="school">
						<option> </option>
						<option>Engineering</option>
						<option>Management</option>
						<option>Science</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="sel1">Course</label>
					  <select class="form-control" name="course">
						<option> </option>
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
					  <select class="form-control" name="branch">
					    <option> </option>
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
					  <select class="form-control" name="session">
						<option> </option>
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
					<div class="form-group">
					  <label for="inputdefault">Mobile number:</label>
					  <input class="form-control" name="mobile" type="text">
					</div>
					<align><center><button type="submit" name="submit" class="btn btn-primary">OK</button></align><br><br>
				</form>
		
				<?php
					include_once("config.php");
					if(isset($_POST['submit'])) 
					{	
						$email=$_SESSION['login_user'];
						$newemail=mysqli_real_escape_string($mysqli,$_POST['emailid']);
						$nam= mysqli_real_escape_string($mysqli,$_POST['name']);
						$school= mysqli_real_escape_string($mysqli,$_POST['school']);
						$cour= mysqli_real_escape_string($mysqli,$_POST['course']);
						$branch= mysqli_real_escape_string($mysqli,$_POST['branch']);
						$year= mysqli_real_escape_string($mysqli,$_POST['session']);
						$mob= mysqli_real_escape_string($mysqli,$_POST['mobile']);
						$typ=$_SESSION['choice_t'];
						if($typ=='student')
						{   $result = mysqli_query($mysqli, "SELECT * FROM alumni WHERE Email_id='$email'");
								if($row = mysqli_fetch_array($result))
								{   if($newemail!=$email)
									{ $querychange = mysqli_query($mysqli,"UPDATE alumni SET Email_id='$newemail' WHERE Email_id='$email'");
									   echo "please login again </br>";
									}
									if($nam)
									{ $querychange = mysqli_query($mysqli,"UPDATE alumni SET Name='$nam' WHERE Email_id='$email'");
										
									}
									if($school)
									{ $querychange = mysqli_query($mysqli,"UPDATE alumni SET School='$school' WHERE Email_id='$email'");
										
									}
									if($cour)
									{ $querychange = mysqli_query($mysqli,"UPDATE alumni SET Course='cour' WHERE Email_id='$email'");
										
									}
									if($branch)
									{ $querychange = mysqli_query($mysqli,"UPDATE alumni SET Branch='$branch' WHERE Email_id='$email'");
										
									}
									if($year)
									{ $querychange = mysqli_query($mysqli,"UPDATE alumni SET Session='year' WHERE Email_id='$email'");
										
									}
									if($mob)
									{ $querychange = mysqli_query($mysqli,"UPDATE alumni SET Mobile_number='$mob' WHERE Email_id='$email'");
									}
									echo "<font color='green'>information Updated successfully";
								}
						}
						else
						{	$result = mysqli_query($mysqli, "SELECT * FROM teacher WHERE Email_id='$email'");
								if($row = mysqli_fetch_array($result))
								{   if($newemail!=$email)
									{ $querychange = mysqli_query($mysqli,"UPDATE teacher SET Email_id='$newemail' WHERE Email_id='$email'");
									   echo "please login again </br>";
									}
									if($nam)
									{ $querychange = mysqli_query($mysqli,"UPDATE teacher SET Name='$nam' WHERE Email_id='$email'");
										
									}
									if($school)
									{ $querychange = mysqli_query($mysqli,"UPDATE teacher SET School='$school' WHERE Email_id='$email'");
										
									}
									if($cour)
									{ $querychange = mysqli_query($mysqli,"UPDATE teacher SET Course='cour' WHERE Email_id='$email'");
										
									}
									if($branch)
									{ $querychange = mysqli_query($mysqli,"UPDATE teacher SET Branch='$branch' WHERE Email_id='$email'");
										
									}
									if($mob)
									{ $querychange = mysqli_query($mysqli,"UPDATE teacher SET Mobile_number='$mob' WHERE Email_id='$email'");
									}
									echo "<font color='green'>information Updated successfully";
								}
							
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
