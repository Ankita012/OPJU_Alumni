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
            min-height:800px ;
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
		margin-top:80px;
		padding:40px 40px 40px 40px;
		margin-left:80px;
		width:75%;
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
			</div>
			<ul class="list-group">
				<li class="list-group-item "><a href="">Profile</a></li>
				<li class="list-group-item"><a href="admin.php">Add Alumni</a></li>
			    <li class="list-group-item active"><a href="#j1">Add Teachers</a></li>
				 <li class="list-group-item "><a href="">Alumni List</a></li>
				<li class="list-group-item "><a href="">Invite Alumns</a></li>
				<li class="list-group-item "><a href="">Alumni meet</a></li>
				<li class="list-group-item "><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="col-lg-10" id="c2">
			<div class="jumbotron" id="j1">
			   <h3>Create Teacher Account</h3><hr><br>
				<form>
					<div class="form-group">
					  <label for="inputdefault">EmailID</label>
					  <input class="form-control" name="emailid" type="text" required>
					  <p style="font-size:12px"><b>You can add multiple user by putting ' ; ' beetween each emailId<b></style></p>
					</div>
					<div class="form-group">
					  <label for="sel1">School</label>
					  <select class="form-control" name="school" required>
						<option>Engineering</option>
						<option>Management</option>
						<option>Science</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="sel1">Course</label>
					  <select class="form-control" name="course" required>
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
					<button type="submit">Submit</button>
				</form>
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
