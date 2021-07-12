<!DOCTYPE html>
<?php 
session_start(); 
include("includes/connection.php"); 
?>
<html>
<head>
	<title>Admin Login Panel</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content {
	  width: 50%;
	  height: 40%;
	  margin: 10px auto;
	  background-color: #fff;
	  border: 2px solid #e6e6e6;
	  padding: 40px 50px;
	}
	.header {
	  border: 0px solid #000;
	  margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	.overlap-text {
	  position: relative;
	}

	.overlap-text a {
	  position: absolute;
	  top: 8px;
	  right: 10px;
	  font-size: 14px;
	  text-decoration: none;
	  font-family: 'Overpass Mono', monospace;
	  letter-spacing: -1px;
	}
</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;"><strong>Coding Cafe</strong></h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
		        <div class="header">
		          <h3 style="text-align: center;"><strong>Admin Login Panel</strong></h3><hr>
		        </div>
		        <div class="l-part">
		          <form  action="" method="post">
		          	<input type="email" placeholder="Email" name="email" required class="form-control input-md" /><br>
			        <input type="password" placeholder="Password" name="pass" required class="form-control input-md" /><br>
		            <center><button id="signup" class="btn btn-info btn-lg" name="admin_login">Login</button></center>
		          </form>
		        </div>
	      </div>
		</div>
	</div>
</body>
</html>
<?php 
	if(isset($_POST['admin_login'])){
		
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$pass = mysqli_real_escape_string($con,$_POST['pass']);
		
		$get_admin = "select * from admin where admin_email='$email' AND admin_pass='$pass'";
		
		$run_admin = mysqli_query($con,$get_admin); 
		
		$check_admin = mysqli_num_rows($run_admin); 
		
		if($check_admin==0){
			echo "<script>alert('Email or password is not correct, plz try again')</script>";
		}
		else {
		$_SESSION['admin_email']=$email;
		
		echo "<script>window.open('index.php?welcome=Welcome $email','_self')</script>";
		}
	
	}
	
	?>