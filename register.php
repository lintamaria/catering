<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["name"];
//echo "<script> alert('hai');</script>";
$b=$_POST["address"];

$f=$_POST["email"];
$g=$_POST["phoneno"];
$h=$_POST["username"];
$i=$_POST["password"];

/*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
$result=mysqli_query($con,$sqll) or die("Connection Failed!");
$arr=mysqli_fetch_array($result);
if($arr)
{
	echo"<script>alert('Username already exist!!!');</script>)";
}
else{*/

$sql="INSERT INTO `reg`(`name`, `address`, `email`, `phoneno`, `username`, `password`) VALUES ('$a','$b','$f','$g','$h','$i')";
//  $sql="INSERT INTO `register`( `name`, `address`,  `email`, `phoneno`, `username`, `password`) VALUES ('$a','$b','$f','$g','$h','$i')";
$result=mysqli_query($con,$sql);
$q = "SELECT `id` FROM `reg` WHERE email= '$f' ";
$result = $con->query($q);
$row = $result->fetch_assoc();
$rid=$row["id"];

//SELECT `id`, `name`, `addres`, `email`, `phone`, `username`, `password` FROM `reg` WHERE 1


$sql1="INSERT INTO `login`(`reg_id`, `username`, `passsword`, `user_type`, `status`) VALUES ('$rid','$h','$i','user','0')";
$result1=mysqli_query($con,$sql1);

echo"<script>alert('Data Entered Successfully');</script>)";

}


?>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GREEN responsive bootstraap template</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link href="css/responsive-slider.css" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- skin -->
		<link rel="stylesheet" href="skin/default.css">
    </head>
	 
    <body>
	
	<div class="header">
	
		
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">Catering Management Service
					</a></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
						<li class="active"><a href="index.php">Home</a></li>
						
						<li><a href="register.php">Register</a></li>
						
						<li><a href="login.php">Login</a></li>
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		
		
	
	</div>
	

			<div class="container">
				<br>	<br>	<br>
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp"><b>REGISTER</b></h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">
						
<form name="myform" action="#" method="POST" id="form">
							 
							<div class="wow bounceIn">
							  <div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="maxlen:4" required >
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="email">Address</label>
								
								<textarea class="form-control" name="address" rows="5" data-rule="required" placeholder="Address"  required></textarea>
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="subject">Phone</label>
								<input type="number" class="form-control" name="phoneno" id="subject" placeholder="Phone" data-rule="maxlen:4" required />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="message">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" required/> 
								<div class="validation"></div>
							  </div>
							</div>
							 <div class="form-group">
								<label for="subject">user name</label>
								<input type="text" class="form-control" name="username" id="subject" placeholder="user name" data-rule="maxlen:4" required/>
								<div class="validation"></div>
							  </div>
							   <div class="form-group">
								<label for="subject">password</label>
								<input type="password" class="form-control" name="password" id="subject" placeholder="Password" data-rule="maxlen:4" required />
								<div class="validation"></div>
							  </div>
							 
							
<center>
       <button class="line-btn green" value="submit" name="submit">Submit</button>

     </center>
	 </form>
	 <br>	<br>	<br>
						</div>
					</div>
					<!-- ./span12 -->
				</div>
				
			</div>
			</html>