<?php
@include 'config.php';
session_start();

$mail=$_SESSION['email'];
$name=$_SESSION['name'];
if (isset($_POST['send'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $message = $_POST['message'];

    $insert = "INSERT INTO tblcontact(firstname,lastname,email,subject,message) VALUES('$fname','$lname','$email','$sub','$message')";
    mysqli_query($conn, $insert);
    if ($insert) {
        echo "<script>alert('Message sent successfully');</script>";
    } else {
        echo "<script>alert('Message not sent');</script>";
    }
}
if (isset($_POST['snd'])) {
    // $fname = $_POST['fname'];
    $message = $_POST['feedback'];

    $insert = "INSERT INTO tbltestimonials(username,email,reviews) VALUES('$name','$mail','$message')";
    mysqli_query($conn, $insert);
    if ($insert) {
        echo "<script>alert('Thank you for your feedback');</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/landing-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:43:17 GMT -->

<head>
    <title>The Traveller</title>
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

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
</head>


<body id="tour-homepage" data-spy="scroll">

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--======== SEARCH-OVERLAY =========-->
    <!-- <div id="myOverlay" class="overlay">
          <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
            <form>
              <input class="float-left" type="text" placeholder="Search.." name="search">
              <button class="float-left" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div> -->


    <!--============= TOP-BAR ===========-->
    <div id="top-bar" class="tb-text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>Udupi, Karnataka || 576114</li>
                            <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+91 89654752</li>
                        </ul>
                    </div><!-- end info -->
                </div><!-- end columns -->

                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li> -->
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li> -->
                            <li class="list-inline-item"><a href="https://instagram.com/abhishekrebello?igshid=YmMyMTA2M2Y="><span><i class="fa fa-instagram"></i></span></a></li>
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest"></i></span></a></li> -->

                            <?php
                            @session_start();
                            @$uname = $_SESSION['name'];
                            if ($uname == '') {
                                echo '<li class="list-inline-item"><a href="login-1.php"><span><i class="fa fa-lock"></i></span>Login</a></li>';
                                echo '<li class="list-inline-item"><a href="registration-2.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>';
                            } else {
                                echo '<li class="list-inline-item"><a href="logout.php"><span><i class="fa fa-lock"></i></span>Logout</a></li>';
                                echo '<li class="list-inline-item"><a href="login-1.php"><span><i class="fa fa-lock"></i></span>welcome ' . $uname . '</a></li>';

                                echo '<li class="list-inline-item"><a href="user-profile.php"><span><i class="fa fa-user"></i></span></a></li>';
                            };
                            ?>

                            </li>
                        </ul>
                    </div><!-- end links -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end top-bar -->




    <!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-6">

        <div class="header-absolute">
            <nav class="navbar navbar-expand-xl main-navbar navbar-custom navbar-transparent bg-transparent nav-links-active" id="mynavbar">
                <div class="container">

                    <a href="#" class="navbar-brand py-1 my-auto"><span><i class="fa fa-plane"></i>THE</span>TRAVELLER</a>
                    <div class="header-search d-xl-none my-auto ml-auto py-1">
                        <a href="#" class="search-button" onclick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                    </div>
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                        <i class="fa fa-navicon py-1"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="myNavbar1">
                        <ul class="navbar-nav ml-auto navbar-search-link">
                            <li class="nav-item active"><a class="nav-link px-4" href="#tour-homepage">Home</a></li>
                            <li class="nav-item"><a class="nav-link px-4" href="#tour-offers">Tours</a></li>
                            <!-- <li class="nav-item"><a class="nav-link px-4" href="#hot-tour">Offers</a></li> -->
                            <!-- <li class="nav-item"><a class="nav-link px-4" href="#tour-packages">Packages</a></li> -->
                            <li class="nav-item"><a class="nav-link px-4" href="#testimonials">Testimonials</a></li>
                            <li class="nav-item"><a class="nav-link px-4" href="#contact-form">Contact Us</a></li>
                            
                        </ul>
                    </div><!-- end navbar collapse -->
                </div><!-- End container -->
            </nav><!-- end navbar -->
        </div><!-- end header-absolute -->

        <div class="sidenav-content">
            <!-- Sidebar  -->
            <nav id="sidebar" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

                <div id="main-menu">
                    <div id="dismiss">
                        <button class="btn" id="closebtn">&times;</button>
                    </div>
                    <div class="list-group panel">
                        <a class="items-list active" href="#tour-homepage">
                            <span><i class="fa fa-home link-icon"></i></span>Home</a>

                        <a class="items-list" href="#tour-offers"><span><i class="fa fa-plane link-icon"></i></span>Tours</a>

                        <a class="items-list" href="#hot-tour"><span><i class="fa fa-building link-icon"></i></span>Offers</a>

                        <a class="items-list" href="#tour-packages" class="il"><span><i class="fa fa-globe link-icon"></i></span>Packages</a>

                        <a class="items-list" href="#testimonials" href="#cruise-links"><span><i class="fa fa-ship link-icon"></i></span>Testimonials</a>

                        <a class="items-list" href="#contact-form" href="#cars-links"><span><i class="fa fa-car link-icon"></i></span>Contact Us</a>

                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->

        <div class="flexslider slider tour-slider" id="slider-6">
            <ul class="slides">

                <li class="item-1 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/landing-slider-1.jpg) 50% 65%; background-size:cover; height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>KARNATAKA</h2>
                            <span class="highlight-price highlight-2">within affordable budget range</span>
                            <p></p>
                            <p>One State Many Worlds</p>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-1 -->

                <li class="item-2 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(KarnatakaImages/Karnataka3.png) 50% 65%; background-size:cover; height:100%;">
                    <div class="meta">
                        <div class="container">
                            <h2>KARNATAKA</h2>
                            <span class="highlight-price highlight-2">within affordable budget range</span>
                            <p></p>
                            <p>One State Many Worlds</p>
                        </div><!-- end container -->
                    </div><!-- end meta -->
                </li><!-- end item-2 -->

            </ul>
        </div><!-- end slider -->
    </section><!-- end flexslider-container -->


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
                        $SELECT = mysqli_query($conn, "SELECT * FROM tblpackages");
                        if (mysqli_num_rows($SELECT) > 0) {
                            while ($fetch_package = mysqli_fetch_assoc($SELECT)) {
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
                                                <li class="price"><?php echo $fetch_package['price']; ?><span class="arrow"><a href="tour-booking-left-sidebar.php?detail=<?php echo $fetch_package['packageId']; ?>"><i class="fa fa-angle-right"></i></a></span></button></li>
                                                
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


    <!--======================= BEST FEATURES ======================-->
    <section id="best-features" class="banner-padding orange-features">
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


    
    


    



    <!--============== HIGHLIGHTS =============-->
    <section id="highlights" class="highlights-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">

                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                            <div class="highlight-box">
                                <div class="h-icon">
                                    <span><i class="fa fa-taxi"></i></span>
                                </div><!-- end h-icon -->

                                <div class="h-text">
                                    <span class="numbers">15</span>
                                    <p>Best rated tours so far</p>
                                </div><!-- end h-text -->
                            </div><!-- end highlight-box -->
                        </div><!-- end columns -->

                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                            <div class="highlight-box">
                                <div class="h-icon">
                                    <span><i class=""></i></span>
                                </div><!-- end h-icon -->

                                <div class="h-text cruise">
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

                                <div class="h-text taxi">
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


    <!--=============== TESTIMONIALS ===============-->
    <section id="testimonials" class="section-padding">
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
                            <div class="carousel-item">
                                <!-- <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote> -->
                                <!-- <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span> -->
                                </div><!-- end rating -->

                                <!-- <small>Jhon Smith</small> -->
                            </div><!-- end item -->

                            <div class="carousel-item">
                                <!-- <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote> -->
                                <!-- <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span> -->
                                </div><!-- end rating -->

                                <!-- <small>Jhon Smith</small> -->
                            </div><!-- end item -->

                        </div><!-- end carousel-inner -->


                    </div><!-- end quote-carousel -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end testimonials -->





    <!--=============== CONTACT-FORM ===============-->
    <section id="contact-form" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                    <div class="page-heading white-heading">
                        <h2>Contact Us</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-7">
                            <form method="post">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control" placeholder="First Name" required />
                                            <span><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control" placeholder="Last Name" required />
                                            <span><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required />
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required />
                                    <span><i class="fa fa-info-circle"></i></span>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="7" placeholder="Your Message"></textarea>
                                    <span><i class="fa fa-pencil"></i></span>
                                </div>

                                <input type="submit" name="send" class="btn btn-orange btn-block" value="send" />

                                <!-- <button class="btn btn-orange btn-block">Send</button> -->
                            </form>
                        </div><!-- end columns -->

                        <div class="col-12 col-md-12 col-lg-5">
                            <div class="contact-block">
                                <span><i class="fa fa-map-marker"></i></span>
                                <p>Udupi, Karnataka | 576105</p>
                                <span class="border-shape"></span>
                            </div><!-- end address-block -->

                            <div class="contact-block">
                                <span><i class="fa fa-phone"></i></span>
                                <p>+91 89654752</p>
                                <span class="border-shape"></span>
                            </div><!-- end address-block -->

                            <div class="contact-block">
                                <span><i class="fa fa-envelope"></i></span>
                                <p>info@thetraveller.com</p>
                                <span class="border-shape"></span>
                            </div><!-- end address-block -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-form -->


    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-w ftr-heading-mgn-2">

        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-5 col-xl-5 footer-widget ftr-about ftr-our-company">
                        
                        <h3 class="footer-heading">OUR COMPANY</h3>
                        <p>We are a team of experienced travel enthusiasts who share a passion to help our clients in exploring and creating unforgettable travel experiences. The Traveller agency was founded with the mission of providing personalized and hassle-free travel planning services, and we take pride in delivering exceptional customer service and attention to detail..</p>
                       
                        <ul class="social-links list-inline list-unstyled">
                            <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li> -->
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li> -->
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li> -->
                            <li class="list-inline-item"><a href="https://instagram.com/abhishekrebello?igshid=YmMyMTA2M2Y="><span><i class="fa fa-instagram"></i></span></a></li>
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li> -->
                            <li class="list-inline-item"><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                        <br><br>

                        <div class="map" >
                            <iframe style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                            </div>
                    </div><!-- end columns -->

                    <div class="col-12 col-md-12 col-lg-7 col-xl-7 footer-widget ftr-map">
                    <h3 class="footer-heading">Give us your feedback</h3>
                    <div class="form-group">
                    <div class="input-group">
                        <form action="" method="post">
                                    <textarea style="border-radius: 5px;" name="feedback" id="" cols="60" rows="8" placeholder="Write your testimonials" required></textarea>
                                    <!-- <input type="" name="email" class="form-control input-lg" placeholder="Enter your email address" required/> -->
                                    <br><br>
                                    <input type="submit" style="width: 507px; border-radius:5px;" name="snd" class="btn btn-orange btn-block" value="send" />
                                    <!-- <span class="input-group-btn" style="background-color:#faa61a;height:34px;"><button class="btn btn-lg" name="btnsend"><i class="fa fa-envelope"></i></button></span> -->
                                    </form>
                                </div>
                                        </div>
                        <!-- <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                        
                            </div> -->
                    </div>
                    <!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-top -->

        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="copyright">
                        <p>© 2023 <a href="#">The Traveller</a>. All rights reserved.</p>
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
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <!-- Page Scripts Ends -->

</body>
</html>