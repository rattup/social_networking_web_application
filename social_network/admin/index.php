<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");
?>
<?php 

if(!isset($_SESSION['admin_email'])){
	header("location: admin_login.php");
}
else { ?>
<html>
<head>
	<title>Welcome to Admin Panel</title> 
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/home_style2.css" media="all"/>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Coding Cafe</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	       	<li><a href="index.php?view_users">View Users</a></li>
			<li><a href="index.php?view_posts">View Posts</a></li>
	      </ul>
	    

	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <li><a href="admin_logout.php">Logout</a></li>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
</nav>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
	<h2 style="color: #3897f0;text-align:center;padding:5px;">
	</h2>
	<?php 
		if(isset($_GET['view_users'])){
			echo"<center><pre style='color:#3897f0;'><h3>Here You can View and Delete users</h3></pre></center>";
			include("includes/view_users.php");
		}
		if(isset($_GET['view_posts'])){
			echo"<center><pre style='color:#3897f0;'><h3>Here You can View and Delete Posts</h3></pre></center>";
			include("includes/view_posts.php");
		}
			
	?>
	</div>
	<div class="col-sm-2">
	</div>
</div>
</body>
</html>
<?php } ?>