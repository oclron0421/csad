<?php
include ('Crypt/RSA.php');
$rsa = new Crypt_RSA();
$rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);
$rsa->loadKey("MIICXAIBAAKBgQDmLv6TyOEeXcYEt5uePwSsql7GcPGqxhD9ot8LjzS6NPM3OeDy wez0TIsmvznrKMoTV0rDvLAceuL7a+S+dEEpPMrMFmcMLcMQ7iLXSQBo7ZaMVJT+ pHHxZuwkMxJIIhp9cTVC8ieAMTwNwzq44zYG6X/cA/VBONc/FRtAN7UfNQIDAQAB AoGAFa8lU2BlTgTbzn5KKNkF7zV+Mn0u/v1Or3N5m0Sqh8TM3rh98lCGKn4leQkj Ayi3X1AQs9TMKxABNFnggCKX2rAMT/mQ7afcPEzdrrvd0y2EY0tpiRuE9MjFYMka Fo5aENs8rHZBQ0oL7cEjZXwqF6cE3WQzr7KjX11kaXWwQIcCQQDpuNFhqEK2uPj8 jw3oWh3LUOU0+AeoU1aF7+xpnmqlPAjxgRE6jYSS87ZFcgsRQUeD9HpErhTmHEr4 EWhUwoYjAkEA/B/VrrraNkEeRtgzRWI58HEdxV7z290h6kKDW7oNceV2A3q8WkD0 evdAMSSPn7s+KlTNqG1qTOUDWtL6HKpexwJBAOibD4dptju0C9kPZoAAb/aRJAx7 bOORTWMvTNIw32JjRWNVWJg1j+PQuW6T+X/KwCoLfkQsHJCHR/VrHbJ9hpECQFiM MbcJRuQxIJoPCoq+wcyRXbxY6dp5IpUswQexI1GyHi2AqLAmCfc56SCZT5vw3hdt 60DRFLlm4TO/zznMGDcCQHMG7XzAVuqSlDva3BetRhyYLw+nHH7qHrYhOrCLOWUq j8q33KSmAF2hSJq3nQbhe94H5nBMm3SJ9pcIN+/YHaA=");
$password = $rsa->decrypt(base64_decode($_POST["encrypt"]));
register_user($_POST["name_s"], password_hash($password, PASSWORD_DEFAULT), $_POST["email_s"]);

function register_user($username, $password, $email) {
    $ASTRA_DB_ID = "617ced2f-7eb2-46b9-9b01-28a1fd2f4e2d";
    $ASTRA_DB_REGION = "asia-south1";
    $ASTRA_DB_KEYSPACE= "food";
    $ASTRA_DB_TABLE = "users";
    $ASTRA_DB_APPLICATION_TOKEN= "AstraCS:IlZfzQfrWWXCSZUcsZbHQGTl:34582d72acfc2bd1bfe1fa4e70d41f153b2dc1ddd097feadb6c049ece41fcb1e";
    $URL = "https://" . "$ASTRA_DB_ID" . "-" . "$ASTRA_DB_REGION" . ".apps.astra.datastax.com/api/rest/v2/keyspaces/" . "$ASTRA_DB_KEYSPACE" . "/" . "$ASTRA_DB_TABLE";
    $HEADER = array('accept: application/json', 'x-cassandra-token: '."$ASTRA_DB_APPLICATION_TOKEN",'content-type: application/json');
    $UUID = guidv4();
    $POST = array('id' => "$UUID", 'email' => "$email", 'password' => "$password", 'username' => "$username" );
    $session = curl_init();
    curl_setopt($session, CURLOPT_URL, $URL);
    curl_setopt($session, CURLOPT_POST, true);
    curl_setopt($session,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($session,CURLOPT_HTTPHEADER, $HEADER); 
    curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($POST));
    
    try {
        $result = curl_exec($session);
    } catch (RuntimeException $ex) {
        die(sprint('Http error %s with code %d', $ex->getMessage(), $ex->getCode()));
    }
}

function guidv4($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
?>
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
							<li><a href="menu.php">Menu</a></li>
							<li class="has-dropdown">
								<a href="reviews.php">Gallery</a>
								<ul class="dropdown">
									<li><a href="#">Events</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Coffees</a></li>
								</ul>
							</li>
							<li class="active"><a href="login.php">Reservation</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
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
                                    <div style="font-size:40;color:white;"> Account has been created </div>
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
                                                    </div>
                                               	
					</form>
                            </div>
                    </div>
            </div>

	
	
	
	
	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>Tasty</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Gallery</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Categories</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Landing Page</a></li>
						<li><a href="#">Real Estate</a></li>
						<li><a href="#">Personal</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">e-Commerce</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://https://freehtml5.co">freehtml5.co</a></li>
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