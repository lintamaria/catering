<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["function"];
//echo "<script> alert('hai');</script>";
$b=$_POST["location"];
$c=$_POST["date"];
$d=$_POST["time"];
//echo($id1);
//$sql4="SELECT `reg_id` FROM `login` where `login_id`='$id1'";
//$result4=mysqli_query($con,$sql4);
//$row4=mysqli_fetch_array($result4);
//$rid=$row4['reg_id'];
//echo($rid);
$sql3="INSERT INTO `booking`(`function`,`location`, `date`, `time`) VALUES ('$a','$b','$c','$d')";
$result3=mysqli_query($con,$sql3);

echo"<script>alert('your are Successfully order');</script>)";

}

 //header('location:booking.php');
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
	<section id="header" class="appear">
		
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
						<li><a href="userhome.php">Home</a></li>
						 
						<li><a href="gall.php">Gallery</a></li>
						 <li><a href="logout.php">logout</a></li>
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		
		
	</section>
	</div>
	
<br><br><br><br><br>
<center>
<h1>ORDER BOOKING</h1>
<form name="form" action="#" method="POST" id="form" >
<br>

 
Function
<input type="text" name="function" requird>
<br><br>

Location
<input type="text" name="location" requird>
<br><br>
Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="date" name="date" requird>
<br><br>
Time 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="time" name="time" requird>
<br><br>
  <button class="button" value="Submit" name="submit">Submit</button>

</form>
</center>
</div>
</body>
</html>
