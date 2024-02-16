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
	a  {
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
		margin-left:80px;
		width:75%;
		font-size:16px;
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
				<li class="list-group-item"><a href="alumna.php">Add Alumni</a></li>
			    <li class="list-group-item "><a href="teacher.php">Add Teachers</a></li>
				<li class="list-group-item "><a href="delete.php">Delete account</a></li>
				<li class="list-group-item active"><a href="#j1">Alumni List</a></li>
				<li class="list-group-item "><a href="teacherlist.php">Teacher List</a></li>
				<li class="list-group-item "><a href="invite.php">Invite Alumni</a></li>
			</ul>
		</div>
		<div class="col-lg-10" id="c2">
			<div class="jumbotron" id="j1">
			   <h2>Alumni list</h2><hr><br>
				<?php
					    include_once("config.php");
						$count=0;
						$result = mysqli_query($mysqli, "SELECT * FROM alumni WHERE 1");
						while( $row = mysqli_fetch_array($result))
						{	$count++;
							echo "$count",")"," $row[Email_id] <br />";
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
