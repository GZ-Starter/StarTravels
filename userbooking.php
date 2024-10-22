<?php
@include 'config.php';
session_start();
$uname=$_SESSION['email'];
$name=$_SESSION['name'];
if(isset($_POST['btnsend'])){   

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
if (isset($_POST['cancel'])) {
	$bid = $_POST['bid'];
	$status = 2;
	$cancelby = 'user';
	$sql = mysqli_query($conn, "UPDATE tblbooking SET status='$status',cancelledby='$cancelby' WHERE  bookingid='$bid'");


	$msg = "Booking Cancelled successfully";
}


?>

<!doctype html>
<html lang="en">
    
<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:44 GMT -->
<head>
        <title>Bookings</title>
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
    
    
    <body id="booking">
    
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
                            <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                            <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                        </ul>
                    </div><!-- end info -->
                </div><!-- end columns -->
                <div class="col-12 col-md-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                        
                            <li class="list-inline-item">
                                <form>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <div class="form-group currency">
                                               
                                            </div><!-- end form-group -->
                                        </li>
                                        <li class="list-inline-item">
                                        <?php
                            
                             
                                if ($uname==''){
                                    echo '<li class="list-inline-item"><a href="login-1.php"><span><i class="fa fa-lock"></i></span>Login</a></li>';
                                    echo '<li class="list-inline-item"><a href="registration-2.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>';
                                }else{
                                    echo '<li class="list-inline-item"><a href="logout.php"><span><i class="fa fa-lock"></i></span>Logout</a></li>';
                                    echo '<li class="list-inline-item"><a href="login-1.php"><span><i class="fa fa-lock"></i></span>welcome '.$name.'</a></li>';
                                };
                               ?>    <div class="form-group language">
                                                
                                            </div><!-- end form-group -->
                                        </li>
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
    
            <a href="#" class="navbar-brand py-1 m-0"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
          
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                <i class="fa fa-navicon py-1"></i>
            </button>
    
            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="navbar-nav ml-auto navbar-search-link">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<span><i class="fa fa-angle-down "></i></span></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="index.html" class="dropdown-item">Main Homepage</a></li>
              
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
                                <a class="items-list" href="flight-homepage.html">Flight Homepage</a>
                                <a class="items-list" href="hotel-homepage.html">Hotel Homepage</a>
                                <a class="items-list" href="tour-homepage.html">Tour Homepage</a>
                                <a class="items-list" href="cruise-homepage.html">Cruise Homepage</a>
                                <a class="items-list" href="car-homepage.html">Car Homepage</a>
                                <a class="items-list" href="landing-page.html">Landing Page</a>
                                <a class="items-list" href="travel-agency-homepage.html">Travel Agency Page</a>
                            </div><!-- end sub-menu -->
    
                            <!-- end sub-menu -->
    
                </div><!-- End list-group panel -->
            </div><!-- End main-menu -->
        </nav>
    </div><!-- End sidenav-content -->
    
    
    <!--========= PAGE-COVER ==========-->
    <section class="page-cover dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">My Account</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">My Account</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->
    
    
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="dashboard" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="dashboard-heading">
                            <h2>Travel <span>Profile</span></h2>
                            <p>Hi <?php echo $name; ?>, Welcome to Star Travels!</p>
                            <p>All your trips booked with us will appear here and you'll be able to manage everything!</p>
                        </div><!-- end dashboard-heading -->
                        
                        <div class="dashboard-wrapper">
                            <div class="row">
                            
                                <div class="col-12 col-md-2 col-lg-2 dashboard-nav">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <!-- <a class="nav-link" href="dashboard-1.html"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-profile.php"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="userbooking.php"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                        <li class="nav-item">
                                            <!-- <a class="nav-link" href="wishlist.html"><span><i class="fa fa-heart"></i></span>Wishlist</a></li> -->
                                        <li class="nav-item">
                                            <!-- <a class="nav-link" href="cards.html"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li> -->
                                    </ul>
                                </div><!-- end columns -->
                                
                                <div class="col-12 col-md-10 col-lg-10 dashboard-content booking-trips">
                                    <h2 class="dash-content-title">Trips You have Booked!</h2>


                                    <div class="dashboard-listing booking-listing">
                                        <div class="dash-listing-heading">
                                            
                                                
                                            
                                            
                                           
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                <?php
							
							$sql = mysqli_query($conn, "SELECT * FROM tblbooking WHERE email='$uname'");
							
							if (mysqli_num_rows($sql) > 0) {
								
								while ($result = mysqli_fetch_array($sql)) {				?>
                                                    <tr>
                                                        <!-- <td class="dash-list-icon booking-list-date"><div class="b-date"><h3 style="font-size:medium;"><?php echo $result['fordate']; ?></h3></div></td> -->
                                                        <td class="dash-list-text booking-list-detail">
                                                        <?php 
                                                        $id=$result['packageId']; 
							                            $sql = mysqli_query($conn, "SELECT * FROM tblpackages WHERE packageId='$id'");

                                                       $r = mysqli_fetch_array($sql);
                                                        
                                                        
                                                        ?>
                                                            <h3><?php echo $r['name']; ?></h3>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Booking Date:</span> <?php echo $result['bdate']; ?></li>
                                                                <li><span>Booked for:</span> <?php echo $result['fordate']; ?></li>
                                                                <li><span>Booking Details:</span> <?php echo $result['package']; ?></li>
                                                                <li><span>Client:</span> <?php echo $result['firstname']; ?>&nbsp;<?php echo $result['lastname']; ?><span class="line">|</span><?php echo $result['email']; ?><span class="line">|</span><?php echo $result['phone']; ?></li>
                                                            </ul>
                                                            <!-- <button class="btn btn-orange">Message</button> -->
                                                        </td>
                                                        <form action="" method="post">
                                                        <input type="hidden" name="bid" value="<?php echo $result['packageId']; ?>">
                                                        <td class="dash-list-btn"><button class="btn btn-orange" name="cancel">Cancel</button></td>
                                                        </form>
                                                    </tr>
                                                  <?php 
                                                         }}
                                                 ?>  
                                                   
                                                </tbody>
                                            </table>
                                        </div><!-- end table-responsive -->
                                    </div><!-- end booking-listings -->
                                    
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end dashboard-wrapper -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->          
        </div><!-- end dashboard -->
    </section><!-- end innerpage-wrapper -->
    
    
    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter"> 
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscibe to receive our interesting updates</p>    
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
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
                    
                    
                    
                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                        <ul class="list-unstyled">
                            <!-- <li><a href="#">Blogs</a></li> -->
                            <li><a href="page.php?type=ContactUs">Contact Us</a></li>
                                <li><a href="login-1.php">Login</a></li>
                                <li><a href="registration-2.php">Register</a></li>
                                <li><a href="https://goo.gl/maps/CkZWPDEspcn2APWm6?coh=178571&entry=tt">Site Map</a></li>
                            <!-- <li><a href="#">Site Map</a></li> -->
                        </ul>
                    </div><!-- end columns -->
    
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 footer-widget ftr-about">
                        <h3 class="footer-heading">ABOUT US</h3>
                        <p>We are a team of experienced travel enthusiasts who share a passion to help our clients in exploring and creating unforgettable travel experiences. The Traveller agency was founded with the mission of providing personalized and hassle-free travel planning services, and we take pride in delivering exceptional customer service and attention to detail..</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li> -->
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li> -->
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li> -->
                            <li class="list-inline-item"><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                            <!-- <li class="list-inline-item"><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li> -->
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
                        <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
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
    
    
    <div id="edit-profile" class="modal card-modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Edit Profile</h3>
                </div><!-- end modal-header -->
                
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" placeholder="Name" readonly/>
                        </div><!-- end form-group -->
                        
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="text" class="form-control" placeholder="mm-dd-yy" />
                        </div><!-- end form-group -->
                        
                        <div class="form-group">
                            <label>Your Email</label>
                            <input type="email" class="form-control" placeholder="Email" />
                        </div><!-- end form-group -->
                        
                        <div class="form-group">
                            <label>Your Phone</label>
                            <input type="text" class="form-control" placeholder="Phone Number" />
                        </div><!-- end form-group -->
                                
                        <div class="form-group">
                            <label>Your Country</label>
                            <input type="text" class="form-control" placeholder="Country" />
                        </div><!-- end form-group -->
                        
                        <div class="form-group">
                            <label>Your Address</label>
                            <input type="text" class="form-control" placeholder="Address" />
                        </div><!-- end form-group -->
                        
                        <button class="btn btn-orange">Save Changes</button>
                    </form>
                </div><!-- end modal-bpdy -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end edit-profile -->
</div>
        
        
        <!-- Page Scripts Starts -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-4.4.1.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:44 GMT -->
</html>
