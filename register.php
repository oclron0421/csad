<!DOCTYPE HTML>

<html>
	<head>
        <script src="formValidation.js"></script>   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jsencrypt/3.3.1/jsencrypt.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tasty &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Date Time -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.php">FoodGasm<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="reviews.php">Reviews</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Upload Review</a></li>
                                                        <li class="active"><a href="login.php">Login/SignUp</a></li>
                                                        <?php echo "<span style='font-size:16pt;font-weight:bold;'> &nbsp&nbsp&nbsp&nbsp&nbspLogged in as <span style='text-decoration:underline'>".$username."</span></span>"; ?>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header >
		
	</header>

	
	<div id="fh5co-reservation-form" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Sign Up</h2>
					<div class="row">

					</div>
				</div>
				
				<div class="^">
                                    <form action="registerAccount.php" method="POST" onsubmit="return validateForm();" name="form" id="form-wrap">
						<div class="row form-group">
                                                    <div class="col-md-12">
                                                                    <label for="email">Email</label>
                                                                    <span id="email_error" style="color:red;"></span>
                                                                    <input type="text" class="form-control" id="email">
                                                    </div>
                                                    <div class="col-md-12">
                                                                    <label for="username">Username</label>
                                                                    <span id="username_error" style="color:red;"></span>
                                                                    <input type="text" class="form-control" id="username">
                                                    </div>

                                                            <div class="col-md-12">
                                                                    <label for="password">Password</label>
                                                                    <span id="password_error" style="color:red;"></span>
                                                                    <input type="password" class="form-control" id="password">
                                                            </div>       
                                                            <div class="col-md-12">
                                                                    <label for="password_confirm">Confirm Password</label>
                                                                    <span id="password_confirm_error" style="color:red;"></span>
                                                                    <input type="password" class="form-control" id="password_confirm">
                                                                    <input type="hidden" id="name_s" name="name_s">
                                                                    <input type="hidden" id="email_s" name="email_s">
                                                                    <input type="hidden" id="encrypt" name="encrypt">
                                                            </div> 
                                                </div>
                                                    <div class="row form-group">
                                                            <div class="col-md-12">
                                                                    <input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form">
                                                            </div>
                                                        <div>
                                                            &nbsp;&nbsp;&nbsp;Already have an account? <u><a href="login.php">Login here!</a></a></u>
                                                        </div>
                                                    </div>
                                               	
					</form>
                            </div>
                    </div>
            </div>
	
	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>FoodGasm</h4>
                                        <p>Done By: Ron Ong <br>
                                                    Wong Du Yuan <br>
                                                    Lew Jun Wei <br>
                                                    Lucas Koh <br>
                                            Created with a free bootstrap template. Available at: https://themewagon.com/themes/free-bootstrap-templates-food-restaurant-cafe-websites-design/ <br>
                                            Special thanks to Mr James Yee for teaching us CSAD module for this semester!
                                            </p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="index.php">Home</a></li>
						<li><a href="reviews.php">Review</a></li>
						<li><a href="about.php">About</a></li>
                                                <li><a href="contact.php">Upload Review</a></li>
                                                <li><a href="login.php">Login/Signup</a></li>
					</ul>
				</div>

    
                                <div class="col-md-4 col-md-push-1 fh5co-widget">
                                    <h4>Contact Information</h4>
                                    <ul class="fh5co-footer-links">
                                        <li><a href="https://www.sp.edu.sg/"> Singapore Polytechnic <br> 500 Dover Rd, Singapore 139651</a></li>
                                        <li><a href="tel://1234567920">+65 12345678</a></li>
                                        <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>

                                    </ul>
                                </div>

                            </div>

                            <div class="row copyright">
                                <div class="col-md-12 text-center">
                                    <p>
                                        <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
                                        <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                                    </p>
                                    <p>
                                    <ul class="fh5co-social-icons">
                                        <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                        <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Date Time -->
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

