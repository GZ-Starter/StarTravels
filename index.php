<?php
@include 'config.php';
if(isset($_POST['btnsend'])){   
session_start();
$uname=$_SESSION['name'];
$email=$_POST['email'];
$select="Select * from tblnewsletter WHERE email='$email'";
if($select){
    echo "<script>alert('Already Subscribed');</script>";
}else{
$insert = "INSERT INTO tblnewsletter(username,email) VALUES('$uname','$email')";
mysqli_query($conn, $insert);
if($insert){
    echo "<script>alert('Thank you for Subscribing');</script>";
}else{
    echo "<script>alert('Message not sent');</script>";
}
}


}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fontawesome.com/v5/icons/user-circle?f=classic&s=duotone">
    
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
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>


<body id="main-homepage">

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
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>Udupi, Karnataka || 576114</li>
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
                                    echo '<li class="list-inline-item"><a href="login-1.php"><span><i class="fa fa-lock"></i></span>welcome '.$uname.'</a></li>';
                                };
                               ?>
                               
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->
        
        <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">
        
                <a href="#" class="navbar-brand py-1 m-0"><span><i class="fa fa-plane"></i>THE</span>TRAVELLER</a>
                
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                    <i class="fa fa-navicon py-1"></i>
                </button>
        
                <!-- <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="navbar-nav ml-auto navbar-search-link">
                         <li class="nav-item dropdown active">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<span><i class="fa fa-angle-down "></i></span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="active"><a href="index.php" class="dropdown-item">Main Homepage</a></li>
                                
                            </ul>
                        </li> 

                        
                        
                        <li class="nav-item dropdown"> 
                             <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Features<span><i class="fa fa-angle-down"></i></span></a>
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu dropdown-menu-right row mega-dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown-item">
                                    <div class="row">
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class="dropdown-item dropdown-header">Standard <span>Pages</span></li>
                                                <li><a href="about-us-1.html">About Us 1</a></li>
                                                <li><a href="about-us-2.html">About Us 2</a></li>
                                                <li><a href="services-1.html">Services 1</a></li>
                                                <li><a href="services-2.html">Services 2</a></li>
                                                <li><a href="team-1.html">Our Team 1</a></li>
                                                <li><a href="team-2.html">Our Team 2</a></li>
                                                <li><a href="contact-us-1.html">Contact Us 1</a></li>
                                                <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class=" dropdown-header">User <span>Dashboard</span></li>
                                                <li><a href="dashboard-1.html">Dashboard 1</a></li>
                                                <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="booking.html">Booking</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cards.html">Cards</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class=" dropdown-header">Special <span>Pages</span></li>
                                                <li><a href="error-page-1.html">404 Page 1</a></li>
                                                <li><a href="error-page-2.html">404 Page 2</a></li>
                                                <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                                <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                                <li><a href="faq-left-sidebar.html">FAQ Left Sidebar</a></li>
                                                <li><a href="faq-right-sidebar.html">FAQ Right Sidebar</a></li>
                                                <li><a href="testimonials-1.html">Testimonials 1</a></li>
                                                <li><a href="testimonials-2.html">Testimonials 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md">
                                            <ul class="list-unstyled">
                                                <li class=" dropdown-header">Extra <span>Pages</span></li>
                                                <li><a href="before-you-fly.html">Before Fly</a></li>
                                                <li><a href="travel-insurance.html">Travel Insurance</a></li>
                                                <li><a href="travel-guide.html">Travel Guide</a></li>
                                                <li><a href="holidays.html">Holidays</a></li>
                                                <li><a href="thank-you.html">Thank You</a></li>
                                                <li><a href="payment-success.html">Payment Success</a></li>
                                                <li><a href="pricing-table-1.html">Pricing Table 1</a></li>
                                                <li><a href="pricing-table-2.html">Pricing Table 2</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        
                    </ul> -->
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
                                <a href="#home-links" class="items-list active" data-toggle="collapse" aria-expanded="false">
                                <span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu text-danger" id="home-links">
                                    <a class="items-list active" href="index.php">Main Homepage</a>
                                    
                                    <a class="items-list" href="tour-homepage.html">Tour Homepage</a>
             
                                    <a class="items-list" href="landing-page.html">Landing Page</a>
                                    <a class="items-list" href="travel-agency-homepage.html">Travel Agency Page</a>
                                </div><!-- end sub-menu -->


        
                                <a class="items-list" href="#pages-links" data-toggle="collapse"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu" id="pages-links">
                                    <div class="list-group-heading ">Standard <span>Pages</span></div>
                                    <a class="items-list" href="about-us-1.html">About Us 1</a>
                                    <a class="items-list" href="about-us-2.html">About Us 2</a>
                                    <a class="items-list" href="services-1.html">Services 1</a>
                                    <a class="items-list" href="services-2.html">Services 2</a>
                                    <a class="items-list" href="team-1.html">Our Team 1</a>
                                    <a class="items-list" href="team-2.html">Our Team 2</a>
                                    <a class="items-list" href="contact-us-1.html">Contact Us 1</a>
                                    <a class="items-list" href="contact-us-2.html">Contact Us 2</a>
                                    <div class="list-group-heading ">User <span>Dashboard</span></div>
                                    <a class="items-list" href="dashboard-1.html">Dashboard 1</a>
                                    <a class="items-list" href="dashboard-2.html">Dashboard 2</a>
                                    <a class="items-list" href="user-profile.html">User Profile</a>
                                    <a class="items-list" href="booking.html">Booking</a>
                                    <a class="items-list" href="wishlist.html">Wishlist</a>
                                    <a class="items-list" href="cards.html">Cards</a>
                                    <div class="list-group-heading ">Special <span>Pages</span></div>
                                    <a class="items-list" href="error-page-1.html">404 Page 1</a>
                                    <a class="items-list" href="error-page-2.html">404 Page 2</a>
                                    <a class="items-list" href="coming-soon-1.html">Coming Soon 1</a>
                                    <a class="items-list" href="coming-soon-2.html">Coming Soon 2</a>  
                                    <a class="items-list" href="faq-left-sidebar.html">FAQ Left Sidebar</a>
                                    <a class="items-list" href="faq-right-sidebar.html">FAQ Right Sidebar</a> 
                                    <a class="items-list" href="testimonials-1.html">Testimonials 1</a>
                                    <a class="items-list" href="testimonials-2.html">Testimonials 2</a>
                                    <div class="list-group-heading ">Extra <span>Pages</span></div>
                                    <a class="items-list" href="before-you-fly.html">Before Fly</a>
                                    <a class="items-list" href="travel-insurance.html">Travel Insurance</a>
                                    <a class="items-list" href="travel-guide.html">Travel Guide</a>
                                    <a class="items-list" href="holidays.html">Holidays</a>
                                    <a class="items-list" href="thank-you.html">Thank You</a>
                                    <a class="items-list" href="payment-success.html">Payment Success</a>
                                    <a class="items-list" href="pricing-table-1.html">Pricing Table 1</a> 
                                    <a class="items-list" href="pricing-table-2.html">Pricing Table 2</a>
                                    <a class="items-list" href="popup-ad.html">Popup Ad</a>
                                </div><!-- end sub-menu -->
        
                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->
        
        
                <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-1">
        
            <div class="flexslider slider" id="slider-1">
                <ul class="slides">
                    
                    <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/DSC_1871.jpg) 50% 0%;background-size:cover;
                        height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <h2>Discover</h2>
                                <h1>Karnataka</h1>
                                <a href="tour-homepage.php" class="btn btn-default">View More</a>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                    <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/Manjarabad-Fort-1.jpg) 50% 0%;background-size:cover;
                        height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <h2>Discover</h2>
                                <h1>Karnataka</h1>
                                <a href="tour-homepage.php" class="btn btn-default">View More</a>
                            </div><!-- end container -->  
                        </div>
                    </li><!-- end item-2 --> 
                </ul>
            </div><!-- end slider -->
            
            <!-- end search-tabs -->
            
        </section><!-- end flexslider-container -->

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
                
        
        <!--=============== TOUR OFFERS ===============-->
        <section id="tour-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Tour Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                         <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                            <?php

                            $SELECT=mysqli_query($conn, "SELECT * FROM tblpackages LIMIT 3");
                            if(mysqli_num_rows($SELECT)>0){
                                while($fetch_package=mysqli_fetch_assoc($SELECT)){

                            ?>
                            
                            
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <!-- <a href="#"> -->
                                            <img src="KarnatakaImages/<?php echo $fetch_package['image']; ?>" class="img-fluid" alt="tour-img" />
                                        </a>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled">
                                            <li class="price"><?php echo $fetch_package['price']; ?><span class="arrow"><button onclick="login()" style="background-color: transparent;"><i class="fa fa-angle-right"></i></span></button></li>
                                        <script>
                                            function login() {
                                                alert("Please Login to book your tour");
                                            }
                                        </script>
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                            <a href="#"><?php echo $fetch_package['name']; ?></a>
                                            <p>From:<?php echo $fetch_package['pickuppoint']; ?> </p>
                                            
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            <?php
                                };
                            };
                            ?>
                            
                        </div> 
                        
                        <div class="view-all text-center">
                            <!-- <a href="tour-listing-right-sidebar.php" class="btn btn-orange">View All</a> -->
                        </div><!-- end view-all -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end tour-offers -->

        <!--==================== HIGHLIGHTS ====================-->
        <section id="highlights" class="section-padding back-size"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">


                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-taxi"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text taxi">
                                        <span class="numbers">15</span>
                                        <p>Best rated tours so far</p>  
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->

                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="#"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text">
                                        <span class="numbers"></span>
                                        <p></p>
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->


                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-building"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text">
                                        <span class="numbers">Hotels</span>
                                        <p>Best accomodation facilities</p>
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                            
                            
                            
                           
                                
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end highlights -->
                           
        
        <!--==================== VIDEO BANNER ===================-->
        <section id="video-banner" class="banner-padding back-size"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h2>Take a Video Tour</h2>
                        <p>A small glimpse of our services and travel experiences.</p>
                        <div class="margin-small py-5 mt-5 m-sm-0 "></div>
                                                                
                           <!-- Button trigger modal -->
                        <button type="button" class="btn video-btn" id="play-button" data-toggle="modal" data-src="https://www.youtube.com/shorts/kpXsXaWeoPs" data-target="#myModal"><span><i class="fa fa-play mt-0 m-sm-0"></i></span>
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
        </section><!-- end video-banner --> 
        

        
        <!--==================== TESTIMONIALS ====================-->
        <section id="testimonials" class="section-padding back-size">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading white-heading">
                            <h2>Testimonials</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
        
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <blockquote style="font-size: 30px;">Best travel agency</blockquote>
                                <div class="rating">
                                        <!-- <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span> -->
                                    </div><!-- end rating -->
                                            
                                    <span>Adithya</span>
                                </div><!-- end item -->
                            <?php
                        $SELECT = mysqli_query($conn, "SELECT * FROM tbltestimonials");
                        if (mysqli_num_rows($SELECT) > 0) {
                            while ($fetch_package = mysqli_fetch_assoc($SELECT)) {
                        ?>
                                <div class="carousel-item ">
                                    <blockquote style="font-size: 30px;"><?php echo $fetch_package['reviews']; ?></blockquote>
                                    <div class="rating">
                                        <!-- <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span> -->
                                    </div><!-- end rating -->
                                    
                                    <span><?php echo $fetch_package['username']; ?></span>
                                </div><!-- end item -->
                                <?php
                            };
                        };
                        ?>  
                                <!-- <div class="carousel-item"> -->
                                    <!-- <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote> -->
                                    <!-- <div class="rating"> -->
                                        <!-- <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span> -->
                                    <!-- </div> -->
                                            
                                    <!-- <small>Jhon Smith</small> -->
                                <!-- </div> -->
                                <!-- end item -->
                                
                                <!-- <div class="carousel-item"> -->
                                    <!-- <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote> -->
                                <!-- </div> -->
                                <!-- end item -->
                                
                            <!-- </div>end carousel-inner -->
                           
                        </div><!-- end quote-carousel -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end testimonials --> 
                
        
        <!--================ LATEST BLOG ==============-->
        <section id="latest-blog" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <!-- <h2>Our Latest Blogs</h2> -->
                            <hr class="heading-line" />
                        </div>
                        
                        <div class="row">
                            
                             <div class="col-md-6 col-lg-4">
                                <div class="main-block latest-block">
                                    <div class="main-img latest-img">
                                        <a href="#">
                                            <!-- <img src="images/latest-blog-1.jpg" class="img-fluid" alt="blog-img" /> -->
                                        </a>
                                    </div><!-- end latest-img -->
                                    
                                    <div class="latest-info">
                                        <ul class="list-unstyled">
                                            <!-- <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span class="author">by: <a href="#">Jhon Smith</a></span></li> -->
                                        </ul>
                                    </div><!-- end latest-info -->
                                    
                                    <div class="main-info latest-desc">
                                        <div class="row">
                                            <!-- <div class="col-10 col-md-10 main-title"> -->
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                        
                                        <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                    </div><!-- end latest-desc -->
                                </div><!-- end latest-block -->
                            </div><!-- end columns -->
                            
                            <div class="col-md-6 col-lg-4">
                                <div class="main-block latest-block">
                                    <!-- <div class="main-img latest-img"> -->
                                        <a href="#">
                                            <!-- <img src="images/latest-blog-2.jpg" class="img-fluid" alt="blog-img" /> -->
                                        </a>
                                    </div><!-- end latest-img -->
                                    
                                    <div class="latest-info">
                                        <ul class="list-unstyled">
                                            <!-- <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span class="author">by: <a href="#">Jhon Smith</a></span></li> -->
                                        </ul>
                                    </div><!-- end latest-info -->
                                    
                                    <div class="main-info latest-desc">
                                        <div class="row">
                                            <!-- <div class="col-10 col-md-10 main-title"> -->
                                                
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                        
                                        <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                                    </div><!-- end latest-desc -->
                                </div><!-- end latest-block -->
                             </div><!-- end columns -->
                             
                             <div class="col-md-6 col-lg-4">
                                <div class="main-block latest-block">
                                    <div class="main-img latest-img">
                                        <a href="#">
                                            <!-- <img src="images/latest-blog-3.jpg" class="img-fluid" alt="blog-img" /> -->
                                        </a>
                                    </div><!-- end latest-img -->
                                    
                                    <div class="latest-info">
                                        <ul class="list-unstyled">
                                            <!-- <li><span><i class="fa fa-calendar-minus-o"></i></span>29 April,2017<span class="author">by: <a href="#">Jhon Smith</a></span></li> -->
                                        </ul>
                                    </div><!-- end latest-info -->
                                    
                                    <div class="main-info latest-desc">
                                        <div class="row">
                                            <div class="col-10 col-md-10 main-title">
                                                <!-- <a href="#">Secure Travel Tips</a> -->
                                                <!-- <p>Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p> -->
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                        
                                        <!-- <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span> -->
                                    </div><!-- end latest-desc -->
                                </div><!-- end latest-block -->
                             </div><!-- end columns -->
                             
                        </div><!-- end row -->
                        
                        <div class="view-all text-center">
                            <!-- <a href="#" class="btn btn-orange">View All</a> -->
                        </div><!-- end view-all -->  
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end latest-blog -->         
        
        
        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Subscibe to receive our interesting updates</p>    
                        <form method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control input-lg" placeholder="Enter your email address" required/>
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
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
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
                        
                        <div class="col-12 col-md-6 col-lg-2 col-xl-2 footer-widget ftr-links">
                            <h3 class="footer-heading">COMPANY</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Tours</a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-links ftr-pad-left">
                            <h3 class="footer-heading">RESOURCES</h3>
                            <ul class="list-unstyled">
                                <!-- <li><a href="#">Blogs</a></li> -->
                                <li><a href="page.php?type=ContactUs">Contact Us</a></li>
                                <li><a href="login-1.php">Login</a></li>
                                <li><a href="registration-2.php">Register</a></li>
                                <li><a href="https://goo.gl/maps/CkZWPDEspcn2APWm6?coh=178571&entry=tt">Site Map</a></li>
                            </ul>
                        </div><!-- end columns -->
        
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4 footer-widget ftr-about">
                            <h3 class="footer-heading">ABOUT US</h3>
                            <p>We are a team of experienced travel enthusiasts who share a passion to help our clients in exploring and creating unforgettable travel experiences. The Traveller agency was founded with the mission of providing personalized and hassle-free travel planning services, and we take pride in delivering exceptional customer service and attention to detail..</p>
                            <ul class="social-links list-inline list-unstyled">
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                <li class="list-inline-item"><a href="https://instagram.com/abhishekrebello?igshid=YmMyMTA2M2Y="><span><i class="fa fa-instagram"></i></span></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/abhishek-m-rebello-750843210"><span><i class="fa fa-linkedin"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                            </ul>
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->
        
            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="copyright">
                            <p>© 2023 | <a href="index.php">The Traveller</a> .  All rights reserved.</p>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="terms">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="page.php?type=Terms">Terms & Condition</a></li>
                                <li class="list-inline-item"><a href="page.php?type=PrivacyPolicy">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->  
        </section><!-- end footer -->
        
        
                  
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-video.js"></script>
    <script src="js/popup-ad.js"></script>
    <!-- Page Scripts Ends -->
    
</body>
</html>