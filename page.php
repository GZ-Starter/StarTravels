<?php
@include 'config.php';
if (isset($_POST['send'])) {
    session_start();

}
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/about-us-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:37 GMT -->
<head>
    <title>Pages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    
    <!-- Google Fonts -->	
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->	
    <link rel="stylesheet" href="css/bootstrap-4.4.1.min.css">
    

    <!-- Sidebar Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
        
    <!-- Custom Stylesheets -->	
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>
    
    
<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
            
        
        
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>Udupi, Karnataka | 576105</li>
                                <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+91 89654752</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    <div class="col-12 col-md-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                            <?php
                                @session_start();
                                @$uname=$_SESSION['name'];
                                if ($uname==''){
                                    echo '<li class="list-inline-item"><a href="login-1.php"><span><i class="fa fa-lock"></i></span>Login</a></li>';
                                    echo '<li class="list-inline-item"><a href="registration-2.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>';
                                }else{
                                    echo '<li class="list-inline-item"><a href="logout.php"><span><i class="fa fa-lock"></i></span>Logout</a></li>';
                                    echo '<li class="list-inline-item"><a href="#"><span><i class="fa fa-lock"></i></span>welcome '.$uname.'</a></li>';
                                };
                               ?>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
        
        <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">
        
                <a href="#" class="navbar-brand py-1 m-0"><span><i class="fa fa-plane"></i>THE</span>TRAVELLER</a>
                <div class="header-search d-xl-none my-auto ml-auto py-1">
                    <a href="#" class="search-button" onclick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                </div>
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                    <i class="fa fa-navicon py-1"></i>
                </button>
        
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="navbar-nav ml-auto navbar-search-link">
                        <li class="nav-item dropdown">
                            <a href="landing-page.php" class="nav-link" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Home<span></span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- <li><a href="landing-page.php" class="dropdown-item">Main Homepage</a></li> -->
                                <!-- <li><a class="dropdown-item" href="flight-homepage.html">Flight Homepage</a></li> -->
                                <!-- <li><a class="dropdown-item" href="hotel-homepage.html">Hotel Homepage</a></li> -->
                                <!-- <li><a class="dropdown-item" href="tour-homepage.php">Tour Homepage</a></li> -->
                                <!-- <li><a class="dropdown-item" href="cruise-homepage.html">Cruise Homepage</a></li> -->
                                <!-- <li><a class="dropdown-item" href="car-homepage.html">Car Homepage</a></li> -->
                                <!-- <li><a class="dropdown-item" href="landing-page.html">Landing Page</a></li> -->
                                <!-- <li><a class="dropdown-item" href="travel-agency-homepage.html">Travel Agency Page</a></li> -->
                            </ul>
                        </li>
                    
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- End container -->
        </nav>
        <div class="sidenav-content">
            <!-- Sidebar  -->
            <nav id="sidebar" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>
        
                <div id="main-menu">
                    <div id="dismiss">
                        <button class="btn" id="closebtn">&times;</button>
                    </div>
                    <div class="list-group panel">
                                <a href="#home-links" class="items-list" data-toggle="collapse" aria-expanded="false">
                                <span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu text-danger" id="home-links">
                                    <a class="items-list" href="index.html">Main Homepage</a>

                                </div><!-- end sub-menu -->
        
                    </div>
                </div>
            </nav>
        </div>
        
        
        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <!-- <h1 class="page-title">About Us 2</h1> -->
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="landing-page.php">Home</a></li>
                            <li class="breadcrumb-item"><?php echo$_GET['type'];?></li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="about-content-2" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 col-sm-12 col-lg-5 col-xl-4">
                            <div id="abt-cnt-2-img">
                                <img src="images/about-content-2.png" class="img-fluid" alt="about-img" />
                            </div><!-- end abt-cnt-2-img -->
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-sm-12 col-lg-7 col-xl-8">
                            <div id="abt-cnt-2-text">
                                <h2>Welcome to<span><span><i class="fa fa-plane"></i> The</span>Traveller</span></h2>
                                <h3 style=" font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:darkgoldenrod; margin-left:60px;" class="page-title"><?php echo$_GET['type'];?></h3>
                                <?php 
$pagetype=$_GET['type'];
$sql = mysqli_query($conn,"SELECT type,details from tblpages where type='$pagetype'");
// $query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
// $query->execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);
// $cnt=1;
if(mysqli_num_rows($sql) > 0)
{
$query = mysqli_fetch_array($sql);

// foreach($query as $result)
// {		

?>

                                <p style="color: white; margin-left: 60px ;"><?php 	echo $query['details']; ?></p>
 <?php }  
                                ?>
                                <div class="row">
                                    <div class="col-4 col-sm-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-diamond"></i></span>
                                            <h4>Best Service</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-4 col-sm-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-clock-o"></i></span>
                                            <h4>24/7 Availability</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-4 col-sm-4">
                                        <div class="abt-cnt-2-ftr">
                                            <span><i class="fa fa-star"></i></span>
                                            <h4>5 Star Rating</h4>
                                        </div><!-- end abt-cnt-2-ftr -->
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end abt-cnt-2-text -->
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end about-content-2 -->
            
            <div id="video-banner" class="banner-padding back-size">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <h2>Take a Video Tour</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p> -->
                            <div class="margin-small py-5 mt-5 m-sm-0 "></div>
                               <!-- Button trigger modal -->
                                <button type="button" class="btn video-btn" id="play-button" data-toggle="modal" data-src="https://www.youtube.com/embed/0O2aH4XLbto" data-target="#myModal"><span><i class="fa fa-play mt-0 m-sm-0"></i></span>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                      <div class="modal-body">

                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>        
                                        <!-- 16:9 aspect ratio -->

                                        <div class="embed-responsive embed-responsive-16by9">
                                          <iframe class="embed-responsive-item" src="#" id="video"  allowscriptaccess="always">></iframe>
                                        </div>

                                      </div>

                                    </div>
                                  </div>
                                </div>
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end video-banner -->
            
            <div id="why-us" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="page-heading innerpage-heading">
                                <h2>Why Choose Us</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->
                            
                            <div class="row">
                            
                                <div class="col-sm-12 col-md-7 col-lg-7" id="why-us-tabs">
                                    
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item active">
                                            <a href="#tb-happy-client" data-toggle="tab" class="nav-link"><span><i class="fa fa-smile-o "></i></span>Happy Clients</a>
                                        </li>
                                    </ul><!-- end nav-tabs -->
                                    
                                    <div class="tab-content">
                                        
                                        <div id="tb-happy-client" class="container tab-pane active">
                                            <p style="color: white;">We provide best experiences to our clients</p>
                                            <p style="color: white;">Customer satisfaction is out motto</p>
                                        </div><!-- end tb-happy-client -->
                                    </div><!-- end tab-content -->
                                </div><!-- end columns -->
                               
                                <div class="col-sm-12 col-md-5 col-lg-5" id="progress-bars">
                                
                                    <div class="bar">
                                        <h4>Satisfied Clients</h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"><span>90%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                    <div class="bar">
                                        <h4>Packages</h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width:86%"><span>86%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                    
                                
                                    <div class="bar">
                                        <h4>Price Guarantee</h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width:83%"><span>83%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                </div><!-- end columns -->
                                
                                
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->
                   </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end why-us -->
            
        </section><!-- end innerpage-wrapper -->
        
        
        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-dollar"></i></span>
                            <h3>Best Price Guarantee</h3>
                            <p>Let's Travel provides you with the best and affordable price and a travel experience that is worth every penny .</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-lock"></i></span>
                            <h3>Safe and Secure</h3>
                            <p>Let's Travel is a registered and recognized agency and is known to provide genuine services to it,s clients.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h3>Best Travel Agents</h3>
                            <p>We are recognizes as one of the best tavel agents in Karnataka.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-md-6 col-lg-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-bars"></i></span>
                            <h3>Travel Guidelines</h3>
                            <p> Let's Travel also provides you with an expert tour guide with excellent knowledge to guide you throughout your tour.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end best-features -->
        
        
        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Subscibe to receive our interesting updates</p>    
                        <form method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                    <span class="input-group-btn"><button class="btn btn-lg" name="btnsend"><i class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-1 -->
        
        
        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
            <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
                <div class="container">
                    <div class="row">
        
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-contact">
                            <h3 class="footer-heading">CONTACT US</h3>
                            <ul class="list-unstyled">
                                <li><span><i class="fa fa-map-marker"></i></span>Udupi, Karnataka | 576105</li>
                                <li><span><i class="fa fa-phone"></i></span>+91 89654752</li>
                                <li><span><i class="fa fa-envelope"></i></span>info@thetraveller.com</li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <!-- <div class="col-12 col-md-6 col-lg-2 col-xl-2 footer-widget ftr-links">
                            <h3 class="footer-heading">COMPANY</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Tours</a></li>
                            </ul>
                        </div>          <--  end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-links ftr-pad-left">
                            <h3 class="footer-heading">RESOURCES</h3>
                            <ul class="list-unstyled">
                                <li><a href="page.php?type=ContactUs">Contact Us</a></li>
                                <li><a href="login-1.php">Login</a></li>
                                <li><a href="registration-2.php">Register</a></li>
                                <!-- <li><a href="#">Site Map</a></li> -->
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 footer-widget ftr-about">
                            <h3 class="footer-heading">ABOUT US</h3>
                            <p>We are a team of experienced travel enthusiasts who share a passion to help our clients in exploring and creating unforgettable travel experiences. The Traveller agency was founded with the mission of providing personalized and hassle-free travel planning services, and we take pride in delivering exceptional customer service and attention to detail..</p>
                            <ul class="social-links list-inline list-unstyled">
                                <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li> -->
                                <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li> -->
                                <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li> -->
                                <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li> -->
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                                <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li> -->
                                <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li> -->
                            </ul>
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6" id="copyright">
                            <p>© 2023 TheTravel. All rights reserved.</p>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-6" id="terms">
                            <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="page.php?type=Terms">Terms & Condition</a></li>
                            <li class="list-inline-item"><a href="page.php?type=PrivacyPolicy">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
    </div><!-- End wrapper -->
        
        
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-video.js"></script>
    <!-- Page Scripts Ends -->

</body>
</html>
