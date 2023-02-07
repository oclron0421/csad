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

        <style>
            #display_image{
                width: 100%;
                height: 800px;
                border: 1px  solid white;
                background-size: cover;

            }
        </style>
        <script src="formValidation.js"></script>  

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


							<li class="active"><a href="index.php">Home</a></li>

							<li ><a href="index.php">Home</a></li>

							</li>
							<li><a href="about.php">About</a></li>
							<li class="active"><a href="contact.php">Upload Review</a></li>
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
							<h1>Upload a Review!</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Add a review</h2>
					<p>If you'd like to share your opinion on food, please fill up the form below to share your love for food with others!</p>
		
				</div>
			</div>
			
			<div class="row">
				<div>
					<form action="servierReview.php" id="form-wrap" method="post" enctype="multipart/form-data">

						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Food</label>
								<input name="foodname" type="text" class="form-control" id="name">

							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Location</label>
								<input name="location" id="location" type="text" class="form-control">

							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="description">Food Description</label>
								<textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>

							</div>
						</div>
                                                <div class="row form-group">
							<div class="col-md-12">
								<label for="image">Images</label>
                                                                <input  type="file" class="form_control" id="image_input" name="image" accept="image/png, image/jpg">
                                                                <div id="display_image"><div/>
							</div>
						</div><br>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form" name="submit">

							</div>
                                                </div>            
					</form>
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
						<li><a href="#">Home</a></li>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Reviews</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Upload Review</a></li>
					</ul>
				</div>
