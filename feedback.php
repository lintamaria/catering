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
						<li><a href="register.php">Register</a></li>
							<li><a href="login.php">Login</a></li>
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		
		
	</section>
	</div>
	

<section class="featured">
	<div id="index">
			<!-- Responsive slider - START -->
    	<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
			<div class="slides" data-group="slides">
				<ul>
					<li>
						<div class="slide-body" data-group="slide">
							<img src="img/8.jpg" alt="">
							<div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
								<h2>Evergreen Caterers</h2>
								<div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><h4><span>Excellent and wide caterering expirence in All South Indian,North Indian Dishes and Kerala special Sadya</span></h4></div>
								<div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h3>Celebrate your functions with Evergreen Caterers</h3></div>
							</div>
						</div>
					</li>
					<li>
						<div class="slide-body" data-group="slide">
							<img src="img/9.jpg" alt="">
							<div class="caption header" data-animate="slideAppearDownToUp" data-delay="500" data-length="300">
								<h2>Evergreen Caterers</h2>
								<div class="caption-sub" data-animate="slideAppearUpToDown" data-delay="800" data-length="300"><h4><span>Excellent and wide caterering expirence in All South Indian,North Indian Dishes,Kerala special Sadya</span></h4></div>
								<div class="caption-sub" data-animate="slideAppearRightToLeft" data-delay="1200" data-length="300"><h3>Celebrate your functions with Evergreen Caterers</h3></div>
							</div>
						</div>
					</li>
  	    		<li>
              <div class="slide-body" data-group="slide">
                <img src="img/10.jpg" alt="">
                <div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
                  <h2>Evergreen Caterers</h2>
                  <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h4>Excellent and wide caterering expirence in All South Indian,North Indian Dishes,Kerala special Sadya</h4></div>
				  <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><h3><span>Celebrate your functions with Evergreen Caterers</span></h3></div>
		
				</div>
                </div>
  	    		</li>
			
  	    	</ul>
		</div>
        
        <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
        <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
        
		
    	</div>



<section id="section-contact" class="section appear clearfix">
			<div class="container">
				
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">FEEDBACK</h2>
							 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">
							<div id="sendmessage">
								 Your message has been sent. Thank you!
							</div>
							<form action="contact/contact.php" method="post" role="form" class="contactForm">
							<div class="wow bounceIn">
							  <div class="form-group">
								<label for="name">Your Name</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							  </div>
							  
							  <div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
								<div class="validation"></div>
							  </div>
							</div>
							  <button type="submit" class="line-btn green">Send your feedback</button>
							</form>

						</div>
					</div>
					<!-- ./span12 -->
				</div>
				
			</div>
		</section>
		<!-- map -->
		
	</body>
</html>