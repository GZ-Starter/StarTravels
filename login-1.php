<?php
@include 'config.php';

session_start();

if(isset($_POST['Submit'])){

   $email =$_POST['email'];
   $pass =$_POST['password'];

   $select = " SELECT * FROM tblLogin WHERE email = '$email' && password = '$pass' ";
   $slct = " SELECT * FROM tblRegister WHERE email = '$email'";
   $result = mysqli_query($conn, $select);
   $res = mysqli_query($conn, $slct);
   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $r = mysqli_fetch_array($res);
      if($row['usertype'] == 'ADMIN'){
        $_SESSION['email'] = $email;
         $_SESSION['name'] = $r['name'];
         echo "<script type='text/javascript'> document.location = './AD/dashboard.php'; </script>";

      }elseif($row['usertype'] == 'user'){
        $_SESSION['email'] = $email;
         $_SESSION['name'] = $r['name'];
         header('location:landing-page.php');

      }
     
   }else{
      echo "<script>alert('Invalid Details');</script>";
   }

};
if(isset($_POST['signup'])){
  $name =$_POST['sname'];
  $email =$_POST['semail'];
  $pass = $_POST['pass'];
  $cpass =$_POST['cpass'];
  $user_type = 'user';

  $select = " SELECT * FROM tbllogin WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){

     $err[] = 'user already exist!';
     echo "<script>alert('User already exists');</script>";

  }else{

     if($pass != $cpass){
        $err[] = 'password not matched!';
     }else{
        $insert = "INSERT INTO tblregister(name,email,password) VALUES('$name','$email','$pass')";
        mysqli_query($conn, $insert);
        $insert = "INSERT INTO tbllogin(email, password, usertype) VALUES('$email','$pass','$user_type')";
        mysqli_query($conn, $insert);
        header('location:login-1.php');
     }
  }

};
?>
<!doctype html>
<html lang="en">

<head>
        <title>Login </title>
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
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>Udupi, Karnataka || 576114</li>
                                <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+91 89654752</li>
                                </ul>
                            </div><!-- end info -->
                        </div><!-- end columns -->
                        <div class="col-12 col-md-6">
                            <div id="links">
                                <ul class="list-unstyled list-inline">
                           
                                    <li class="list-inline-item"><a href="registration-2.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                    
                                        <form>
                                            
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
                    <!-- <div class="header-search d-xl-none my-auto ml-auto py-1">
                        <a href="#" class="search-button" onclick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                    </div> -->
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                        <i class="fa fa-navicon py-1"></i>
                    </button>
            
                    <div class="collapse navbar-collapse" id="myNavbar1">
                        <ul class="navbar-nav ml-auto navbar-search-link">
                            <li class="nav-item dropdown">
                                <a href="index.php" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<span></i></span></a>
                                <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> -->
                                    <!-- <li><a href="index.php" class="dropdown-item">Main Homepage</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="flight-homepage.html">Flight Homepage</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="hotel-homepage.html">Hotel Homepage</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="tour-homepage.html">Tour Homepage</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="cruise-homepage.html">Cruise Homepage</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="car-homepage.html">Car Homepage</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="landing-page.html">Landing Page</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="travel-agency-homepage.html">Travel Agency Page</a></li> -->
                                </ul>
                            </li>
                            
                            <!-- <li class="dropdown-item search-btn">
                                <a href="#" class="search-button" onclick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                            </li> -->
                        </ul>
                    </div><!-- end navbar collapse -->
                </div><!-- End container -->
            </nav>
            <div class="sidenav-content">
                <!-- Sidebar  -->
                <nav id="sidebar" class="sidenav">
                    <h2 id="web-name"><span><i class="fa fa-plane"></i></span>The Traveller</h2>
            
                    <div id="main-menu">
                        <div id="dismiss">
                            <button class="btn" id="closebtn">&times;</button>
                        </div>
                        <div class="list-group panel">
                                    <a href="#home-links" class="items-list" data-toggle="collapse" aria-expanded="false">
                                    <span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                    <div class="collapse sub-menu text-danger" id="home-links">
                                        <a class="items-list" href="index.php">Main Homepage</a>
                                        <a class="items-list" href="hotel-homepage.html">Hotel Homepage</a>
                                        <a class="items-list" href="tour-homepage.html">Tour Homepage</a>
                                        <a class="items-list" href="landing-page.html">Landing Page</a>
                                        <a class="items-list" href="travel-agency-homepage.html">Travel Agency Page</a>
                                    </div><!-- end sub-menu -->
          
            
                        </div><!-- End list-group panel -->
                    </div><!-- End main-menu -->
                </nav>
            </div><!-- End sidenav-content -->
            
            
            <!--============= PAGE-COVER =============-->
            <section class="page-cover" id="cover-login">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-title">Login to TheTraveller</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                               
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </section><!-- end page-cover -->
            
            
            <!--===== INNERPAGE-WRAPPER ====-->
            <section class="innerpage-wrapper">
                <div id="login" class="innerpage-section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            
                                <div class="flex-content">
                                    <div class="custom-form custom-form-fields">
                                        <h3>Login</h3>
                                        
                                        <form method="post">
                                                
                                            <div class="form-group">
                                                 <input type="text" class="form-control" placeholder="email" name="email"  required/>
                                                 <span><i class="fa fa-user"></i></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                 <input type="password" class="form-control" placeholder="Password" name="password" required/>
                                                 <span><i class="fa fa-lock"></i></span>
                                            </div>
                                            
                                            <!-- <div class="checkbox">
                                                 <label><input type="checkbox"> Remember me</label>
                                            </div> -->
                                            
                                            <button name="Submit" class="btn btn-orange btn-block">Login</button>
                                        </form>
                                        
                                        <div class="other-links">
                                            <p class="link-line">New Here ? <a href="registration-2.php">Signup</a></p>
                                            <a class="simple-link" href="forgot-password-2.php">Forgot Password ?</a>
                                        </div><!-- end other-links -->
                                    </div><!-- end custom-form -->
                                    
                                    <div class="flex-content-img custom-form-img">
                                        <img src="images/login.jpg" class="img-fluid" alt="registration-img" />
                                    </div><!-- end custom-form-img -->
                                </div><!-- end form-content -->
                                
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->         
                </div><!-- end login -->
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
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                    <li><a href="#">Site Map</a></li>
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
        </div>
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-4.4.1.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
