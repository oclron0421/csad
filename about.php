<!DOCTYPE HTML>
<?php
session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];
if ($_SESSION['username'] == "") {
    $_SESSION["login_error"] = true;
    header("Location: login.php");
}
?>
<html>
    <head>
        <script src="formValidation.js"></script>  
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
                                <li ><a href="index.php">Home</a></li>
                                <li><a href="reviews.php">Reviews</a></li>
                                <li class="active"><a href="about.php">About</a></li>
                                <li><a href="contact.php">Upload Review</a></li>
                                <li><a href="login.php">Login/SignUp</a></li>
                                <?php echo "<span style='font-size:16pt;font-weight:bold;'> &nbsp&nbsp&nbsp&nbsp&nbspLogged in as <span>(" . $username . ")</span>&nbsp&nbsp&nbsp&nbsp <form action='signout.php' method='post' onsubmit='return true' style='display:inline'> <input style='text-decoration:underline;background:none;border:none;margin:0;padding:0;cursor:pointer' type='submit' value='Sign out'> </form> </span>"; ?>
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
                                    <h1>About Food</h1>



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1 style="color: white; font-family:'Satisfy', cursive";> Where to find us </h1>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7767420301248!2d103.77619776483169!3d1.3092316120691105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a602ff17c15%3A0xa9545dd23993859e!2sSingapore%20Polytechnic!5e0!3m2!1sen!2ssg!4v1675831519522!5m2!1sen!2ssg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  


                    </div>

                </div>
        </div>
    </header>

    <div id="fh5co-about" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                    <img src="images/hero_1.jpeg" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">
                    <div class="section-heading">
                        <h2>Foodgasm</h2>
                        <p> This app aims to help users upload,share and rate food reviews</p>


                        <p><a href="#" class="btn btn-primary btn-outline">Our History</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-timeline">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <ul class="timeline animate-box">
                        <li class="timeline-heading text-center animate-box">
                            <div><h3>Our Experience</h3></div>
                        </li>
                        <li class="animate-box timeline-unverted">
                            <div class="timeline-badge"><i class="icon-genius"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Brain storming</h3>

                                </div>
                                <div class="timeline-body">
                                    <p>Went from shoppee concept app to a food review app..</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge"><i class="icon-genius"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">UI UX check</h3>
                                </div>
                                <div class="timeline-body">
                                    <p>Ironed out the front end of the app.</p>
                                </div>
                            </div>
                        </li>
                        <li class="animate-box timeline-unverted">
                            <div class="timeline-badge"><i class="icon-genius"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Finalisation</h3>
                                </div>
                                <div class="timeline-body">
                                    <p>Finished backend and here you have the app</p>
                                </div>
                            </div>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-featured-testimony" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 fh5co-heading">
                    <h2>Contact our developers</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 style="color: white;">Lucas koh :</h3>
                            <p><a href="mailto:lucaskohyz@gmail.com">lucaskohyz@gmail.com</a></p>
                        </div>
                        <div class="col-md-6">
                            <h3 style="color: white;">Wong Du yuan :</h3>
                            <p><a href="mailto:DUYUAN.21@ichat.sp.edu.sg">DUYUAN.21@ichat.sp.edu.sg</a></p>
                        </div>
                        <div class="col-md-6">
                            <h3 style="color: white;">Ron Ong :</h3>
                            <p><a href="mailto:lucaskohyz@gmail.com">oclron04.21@ichat.sp.edu.sg    </a></p>
                        </div>
                        <div class="col-md-6">
                            <h3 style="color: white;">Lew Jun wei :</h3>
                            <p><a href="mailto:JUNWEI.21@ichat.sp.edu.sg">JUNWEI.21@ichatmsp.edu.sg</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 animate-box img-to-responsive">
                    <img src="images/tam1.jpeg" alt="Lew jun weiii">
                </div>
                <div class="col-md-7 animate-box">
                    <blockquote>
                        <p> &ldquo; Meet our team &rdquo;</p>
                        <p class="author"><cite>&mdash; Lucas Koh</cite></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-contact" class="fh5co-section animate-box">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Message us?</h2>
                    <p>Send us personalised messages, or give us improvements for the app!</p>

                </div>
            </div>

            <div class="row">
                <div>
                    <?php
                    echo "<form action='commentdb.php' onsubmit='return stopcomplaining();' id='form-wrap' method='post' enctype='multipart/form-data'>

                                <input type='hidden' value=" . $username . " name ='name' id ='name'>
                              
                                <input type='hidden' value=" . $email . " name ='email' id ='email'>
                                <div class='row form-group'>
                                    <div class='col-md-12'>
                                        <label for='subject'>Subject:</label><span id='subject_error' style='color:red;margin-left:1.25em;text-decoration:underline;'></span>
                                        <select id='subject' name='subject' style='color:black;'>
                                            <option style='color:black;' value='developers'> Personal Message to the Developers</option>
                                            <option style='color:black;'value='improvements'>Features for improvement</option>
                                            <option style='color:black;'value='others'>Others</option>
                                        </select>

                                    </div>
                                </div>
                                <div class='row form-group'>
                                    <div class='col-md-12'>
                                        <label for='description'>Describe your experience/Message</label><span id='desc_error' style='color:red;text-decoration:underline;'></span>
                                        <textarea name='description' id='description' cols='30' rows='10' class='form-control'></textarea>
                                    </div>
                                </div>
                                
                        </div><br>
                        <div class='row form-group'>
                            <div class='col-md-12'>

                                <input type='submit' class='btn btn-primary btn-outline btn-lg' value='Submit Form' name='submit'>

                            </div>
                        </div>  
                        
                        </form>";
                    ?>    
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
    <!-- Main -->
    <script src="js/main.js"></script>

</body>
</html>

