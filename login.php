<?php
include 'dbcon.php'; 
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
        <title>Evergreen Caterers</title>
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
						 
							 
						 	</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</div>
		<div>
		<img src="img/8.jpg" alt=""> 
 </div>
<div class="container">
				<br>	<br>	<br>
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp"><b>LOGIN</b></h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">						
<form name="myform" action="loguser.php" method="POST" id="form">							 
							<div class="wow bounceIn">
							  <div class="form-group">
								<label for="name">Username</label>
								<input type="text" name="uname" class="form-control" id="uname" data-rule="maxlen:2" required >
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="password">Password</label>
								
								<input type="password" name="psw" class="form-control" id="psw" data-rule="maxlen:4" required >
								<div class="validation"></div>
							  </div>							  
							  </div>						 
							
<center>
       <button class="line-btn green" value="submit" name="submit">Login</button>
	   <br>  <br>
	   <a href="forgotpwd.php"><b>Forgot Password?<b> &nbsp&nbsp&nbsp&nbsp
	     <a href="changepwd.php"><b>Change Password?<b>
     </center>
	 </form>
	 <br>	<br>	<br>
						</div>
					</div>
					<!-- ./span12 -->
				</div>
				
			</div>
			</html>