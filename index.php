
<?php 
session_start();
$username = $_SESSION['username'];
if($_SESSION['username'] == "") {
    $_SESSION["login_error"] = true;
    header("Location: login.php");
}
?>
<?php
    $db1 = mysqli_connect("localhost", "root", "", "review");
    $result1 = mysqli_query($db1, "SELECT * FROM food_review WHERE rating=4 OR rating =5 ORDER BY rating DESC ");
   
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Foodgasm</title>
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="reviews.php">Reviews</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Upload Review</a></li>
                                                        <li><a href="login.php">Login/SignUp</a></li>
                                                        <?php echo "<span style='font-size:16pt;font-weight:bold;'> &nbsp&nbsp&nbsp&nbsp&nbspLogged in as <span>(".$username.")</span>&nbsp&nbsp&nbsp&nbsp <form action='signout.php' method='post' onsubmit='return true' style='display:inline'> <input style='text-decoration:underline;background:none;border:none;margin:0;padding:0;cursor:pointer' type='submit' value='Sign out'> </form> </span>"; ?>
						</ul>
                                          
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>
        <!-- can put embedded video here -->
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>The only food review site you need.</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-pull-1 img-wrap animate-box" data-animate-effect="fadeInLeft">
                                    <iframe width="600" height="365" src="https://www.youtube.com/embed/vkgQcP49lKs" frameborder="0" allowfullscreen></iframe>
                                    </iframe>
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>Our Food review</h2>
						<p>Share the hidden gems of food in Singapore in our website!</p>
                                                <p>Review and share them!</p>
						<p><a href="about.php#historyyy" class="btn btn-primary btn-outline">Our History</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
        <!-- dynamic announcements can go here -->
	<div id="fh5co-featured-menu" class="fh5co-section">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2 style="text-align: center;">Today's Hot Deals!</h2>

					</div>
				</div>
				
				<div >
					<div style="border:solid 3px whitesmoke;padding:-10px;" >
						<?php include 'bannerCode.php'; ?>
					</div>
				</div>
<!--				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="images/gallery_8.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Salted Fried Chicken</h3>
						<span class="fh5co-price">$19<sup>.00</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="images/gallery_7.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Italian Sauce Mushroom</h3>
						<span class="fh5co-price">$17<sup>.99</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="images/gallery_6.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Fried Potato w/ Garlic</h3>
						<span class="fh5co-price">$22<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>-->
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">


				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="images/gordon_ramsay.jpg" height="500" width="750" >
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
					<blockquote style="padding-top: 20dp" >
						<p> &ldquo; Food taste great when reviewed,upload yours now~ &rdquo;</p>
						<p class="author"><cite>&mdash; FoodGasm</cite></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>

<div id="fh5co-slider" class="fh5co-section animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2 style="text-align: center;">Our Top Reviews</h2>
					<div class="row">
						<div class="col-md-6">
                                                    <p>See our top rated reviews for the week</p>
                                                </div>  
                                            <main>
                                                <?php
                                                if($result1 && $result1->num_rows > 0){ 
                                                    while($row1 = mysqli_fetch_assoc($result1)){
                                                ?>
                                                <div class="card">
                                                    <div class="image">
                                                        <img src="images/<?php echo $row1["image"]; ?>" alt="">
                                                    </div>
                                                    <div class="caption">
                                                        <p class="rate">
                                                            <?php
                                                            $rating1 = $row1["rating"];
                                                            for($i=0; $i<$rating1; $i++)
                                                            {
                                                            ?>
                                                            <img src="images/star1.png">
                                                            <?php
                                                            }
                                                            ?>
                                                        <!-- comment -->
                                                        <p class="food_name">Food name:
                                                        <?php echo $row1["foodname"];  ?>
                                                        </br></br>Location: <?php echo $row1["location"];  ?>
                                                        </br></br>Description:
                                                        </br><?php echo $row1["description"]; ?>
                                                    </div> 
                                                </div>
                                                <?php
                                                    }
                                                }
                                                mysqli_close($db1);
                                                ?>

                                            </main>
					</div>
                                     
				</div>
                                    
                            
                        
			</div>
		</div>
	</div>
	
<!-- banner can go in here -->
	<div id="fh5co-blog" class="fh5co-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Sponsored reviews</h2>
                                        <p>Try the sponsored reviews! Rest assured, it is tried and tested by our very own team!</p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="https://www.papis-tacos.com/" class="blog-bg" style="background-image: url(images/gallery_1.jpeg);"></a>
						<div class="blog-text">
							<span class="posted_on">Feb. 15th 2023</span>
							<h3><a href="#">Mexican food</a></h3>
							<p>Give papi tacos a shot as your taste the papi in their taci!</p>
							<ul class="stuff">
								<li style="font-weight: bold;"><i class="icon-heart2"></i>4/5</li>
								
								<li><a href="https://www.papis-tacos.com/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="https://wolfgangssteakhouse.sg/" class="blog-bg" style="background-image: url(images/gallery_2.jpeg);"></a>
						<div class="blog-text">
							<span class="posted_on">Feb. 16th 2023</span>
							<h3><a href="https://wolfgangssteakhouse.sg/">Wolfgang steakhouse</a></h3>
							<p>Give the renowned wolfgang puck steakhouse a shot! Simply delectable</p>
							<ul class="stuff">
								<li style="font-weight: bold;"><i class="icon-heart2"></i>5/5</li>
						
								<li><a href="https://wolfgangssteakhouse.sg/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="https://www.randblab.com/restaurants-bars/25-degrees-singapore/"class="blog-bg" style="background-image: url(images/gallery_3.jpeg);"></a>
						<div class="blog-text">
							<span class="posted_on">Jan. 15th 2023/span>
							<h3><a href="#">25 Degrees</a></h3>
							<p>Mouth watering burgers!Our personal favourite is the buttermilk ;)</p>
							<ul class="stuff">
                                                            <li style="font-weight: bold;"><i class="icon-heart2"></i>5/5</li>
								
								<li><a href="https://www.randblab.com/restaurants-bars/25-degrees-singapore/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/tam2.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Learn more about us </h2>
					<p>Learn more about our history of the app and our team.</p>
					<p><a href="about.php" class="btn btn-primary btn-outline">About page</a></p>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Upload a review </h2>
					<p>Share your wonderful food stories with others, lets spread the love for food with one another!</p>
					<p><a href="contact.php" class="btn btn-primary btn-outline">Upload now!</a></p>
				</div>
			</div>
		</div>
	</div>
<!-- banner ends here -->

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
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

