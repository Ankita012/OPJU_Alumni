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
	body { font-family: Arial, Helvetica, sans-serif;
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
	
	h2  { margin-top:10%;}
	
	input[type=text]{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		/* Set a style for all buttons */
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width:25%;
		}

		button:hover {
			opacity: 0.6;
		}
		.container {
			padding:16px;
		}
		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			padding-top: 60px;
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width:60%; /* Could be more or less, depending on screen size */
			font-size:14px;
			padding:35px 40px 35px;
		}

		/* Add Zoom Animation */
		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
			padding:16px;
		}

		@-webkit-keyframes animatezoom {
			from {-webkit-transform: scale(0)} 
			to {-webkit-transform: scale(1)}
		}
			
		@keyframes animatezoom {
			from {transform: scale(0)} 
			to {transform: scale(1)}
		}

		.close {
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
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
				<li class="list-group-item"><a href="profile.php">Profile</a></li>
				<li class="list-group-item "><a href="changepass.php">Change Password</a></li>
			    <li class="list-group-item "><a href="update.php">Edit Details</a></li>
				<li class="list-group-item  active "><a href="#c2">Alumni Forum</a></li>
			</ul>
		</div>
		<div class="col-lg-10" id="c2">
			<br><br><br><br><h4>Click here to fill the form</h4>
			<button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Click here</button>
				<div id="id01" class="modal col-lg-8">
				 <div class="container">
				  <form class="modal-content animate" action="" method="POST">
					<h3>Alumni meet form</h3>
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <label for="uname"><b>Name</b></label>
					  <input type="text" name="uname" required><br>

					  <label for="email"><b>Email-id</b></label>
					  <input type="text" name="email" required><br>
						
					  <label for="ans"><b>Are you coming for alumni meet?(YES/NO)</b></label><br>
					  <input type="checkbox" name="answer" value="Yes"> YES<br>
					  <input type="checkbox" name="answer" value="No"> NO<br>
					  
					  <label for="suggestion"><b>Suggestion</b></label><br>
					  <textarea rows="4" cols="90" type="text" name="suggestion"></textarea>
					
					  <button type="submit" name="submit">Submit</button>
				  </form>
				 </div>
				</div>
				<?php
					include_once("config.php");
					if(isset($_POST['submit']))
					{	$email=$_SESSION['login_user']; 
						$nemail=mysqli_real_escape_string($mysqli,$_POST['email']);
						$nam=mysqli_real_escape_string($mysqli,$_POST['uname']);
						$ans=mysqli_real_escape_string($mysqli,$_POST['answer']);
						$suggest=mysqli_real_escape_string($mysqli,$_POST['suggestion']);
						$typ=$_SESSION['choice_t'];
						if($email==$nemail)
						{ $result = mysqli_query($mysqli, "SELECT * FROM alumni_meet WHERE Email_id='$email'");
							if(mysqli_num_rows($result) != 1)
							{  $result1 = mysqli_query($mysqli, "INSERT INTO alumni_meet VALUES('$nam','$email','$typ','$ans','$suggest')");  
							   echo "<font color='green'>Alumni meet form has been filled successfully";
							}
							else
								echo "Your form already been filled";
						}
						else
							echo "Your email not match";
					}
				?>
				
		</div>
	</div>
	
	
	<div id="footer">
	</div>
	<script>
			$(function(){
				$("#header").load("nav.html");
				$("#footer").load("footer.html");
			});
			// Get the modal
			var modal = document.getElementById('id01');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
	</script>
	
</body>
</html>
