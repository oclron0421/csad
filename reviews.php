<?php 
session_start();
if($_SESSION['username'] == "") {
    header("Location: login_noLogin.php");
}
$seshname = $_SESSION['username'];
?>
<?php
    $db1 =  mysqli_connect("localhost", "root", "", "review");
    if(isset($_GET['submit'])){
        $title = $_GET['text'];
        $sql = "SELECT * FROM food_review WHERE foodname LIKE '%$title%' OR location LIKE '%$title%'";
        $result1 = mysqli_query($db1, $sql);
        if(!$result1 && !($result->num_rows > 0)){
            $result1 = mysqli_query($db1, "SELECT * FROM food_review ORDER BY rating DESC");
        }
    }else{
        $result1 = mysqli_query($db1, "SELECT * FROM food_review ORDER BY rating DESC");
    }
    //$data = $conn->query($db, $sql);
?>

<?php
    $db2 = mysqli_connect("localhost", "root", "", "comments");
    $result2 = mysqli_query($db2, "SELECT * FROM comment");
?>

<!DOCTYPE HTML>
<html>
	<head> 
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

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
        
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
							<li class="active"><a  href="reviews.php">Reviews</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Upload Review</a></li>
                                                        <li><a href="login.php">Login/SignUp</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>See <em>Our</em> Gallery</h1>
                                                        <form action="reviews.php" method="get">
                                                            <p style="color:white">Search:<input type="text" style="padding-left: 20px; color:black; width:350px; border-radius: 30px;" name="text" value="">
                                                            <input style="color: black; border-radius: 20px; "type="submit" name="submit" value="Search">
                                                        </form>
                                                      
						</div>
                                                        
					</div>
				</div>
			</div>
		</div>
	</header>
            
	
	<div id="fh5co-slider" class="fh5co-section animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Our Reviews</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
						</div>
                                            <main>
                                                <?php
                                                if($result1 && $result1->num_rows > 0){ 
                                                    while($row = mysqli_fetch_assoc($result1)){
                                                ?>
                                                <div class="card">
                                                    <div class="image">
                                                        <img src="images/<?php echo $row["image"]; ?>" alt="">
                                                    </div>
                                                    <div class="caption">
                                                        <p class="rate">
                                                            <?php
                                                            $rating = $row["rating"];
                                                            for($i=0; $i<$rating; $i++)
                                                            {
                                                            ?>
                                                            <img src="images/star1.png">
                                                            <?php
                                                            }
                                                            ?>
                                                        <!-- comment -->
                                                        <p class="food_name">Food name:
                                                        <?php echo $row["foodname"];  ?>
                                                        </br></br>Location: <?php echo $row["location"];  ?>
                                                        </br></br>Description:
                                                        </br><?php echo $row["description"]; ?>
                                                        </br><input type="button" onclick="location.href='#redirectHere';" value="Comments Section" style="color:black; border-radius: 20px;">
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

	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>General Comment Section</h2>
					<div class="row">
						<div class="col-md-6">
                                                    <a id="redirectHere"></a>
                                                   
                                                    <div class="content" style="text-align: left;
	background: white;
	color: white;
	padding: 5px;
	width: 1100px;
	border-radius: 10px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;">
                                                        
                                                            <?php
                                                                if($result2 && $result2->num_rows > 0){
                                                                      // output data of each row
                                                                      while($row2 = $result2->fetch_assoc()) {
                                                                          ?>
                                                                     
                                                        <h3 style="font-weight:bold; " ><?php echo $row2['name']; ?>:
                                                                        <span style="margin-bottom: 15px;
                                                                              width: 1050px;"><?php echo $row2['comment']; ?></span>
                                                             <?php
                                                                }}
                                                                

                                                            ?>
                                                         
                                                    </div>

                                                    <div class="wrapper" style="	background: black;
	border-radius: 10px;
	width: 1100px;
	height: 300px;
	display: flex;
	justify-content: center;
	align-items: center;
	border-top-left-radius: 0;
	border-top-right-radius: 0;">
                                                        <form action="commentServer.php" method="post" class="form">
                                                                <input style="color:black; background: #222222;
	color: white;
	font-size: 15px;
	width: 1050px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	margin-bottom: 10px;
	margin-top: 20px;" type="text" class="name" name="name" placeholder="Name" value="<?php echo $seshname ?>">
                                                                <br>
                                                                <textarea style="color:black; background: #222222;
	color: white;
	font-size: 18px;
	width:1050px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	resize: none;" name="comment" cols="30" rows="5" class="message" placeholder="Message"></textarea>
                                                                <br>
                                                                <button type="submit" class="btn" style="	background: #222222;
	color: white;
	font-size: 15px;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 10px;
	width: 200px;
	border-radius: 20px;
	margin: 0 auto;
	display: block;
	margin-top: 5px;
	margin-bottom: 20px;
	opacity: 0.8;
	transition: 0.3s all ease;" name="post_commen">Post Comment</button>
                                                        </form>
                                                    </div>
                                                    

                                                  
                                                    
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis.</p>
						</div>
					</div>
				</div>

				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="images/person_1.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
					<blockquote>
						<p> &ldquo; Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam. &rdquo;</p>
						<p class="author"><cite>&mdash; Jane Smith</cite></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
	

       
	
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/lewjunwei.jpeg);" data-stellar-background-ratio="0.5">
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
	<script src="js/zoomerang.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
		Zoomerang
      .config({
        maxHeight: 600,
        maxWidth: 900,
        bgColor: '#000',
        bgOpacity: .85
      })
      .listen('[data-trigger="zoomerang"]')
	</script>

	</body>
</html>

