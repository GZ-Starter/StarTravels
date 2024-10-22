<?php
@include 'config.php';
if (isset($_POST['confirm'])) {
    session_start();
    $uname = $_SESSION['name'];
    $check = mysqli_query($conn, "SELECT MAX(bookingid) from tblbooking");
    $row = mysqli_fetch_array($check);

    if ($row[0] == '') {
        $bid = 1;
    } else {
        $bid = $row[0] + 1;
    }
    $fname = $_POST['fname'];
    $pid = @$_POST['pkgid'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $tdate = $_POST['tdate'];
    $package = $_POST['package'];

    $insert = "INSERT INTO tblbooking(packageId,bookingid,firstname,lastname,email,phone,fordate,package) VALUES('$pid','$bid','$fname','$lname','$email','$phone','$tdate','$package')";
    mysqli_query($conn, $insert);
    if ($insert) {
        echo "<script>alert('Booking confirmed');</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
}
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $select = "Select * from tblnewsletter WHERE email='$email'";
    if ($select) {
        echo "<script>alert('Already Subscribed');</script>";
    } else {
        $insert = "INSERT INTO tblnewsletter(username,email) VALUES('$uname','$email')";
        mysqli_query($conn, $insert);
        if ($insert) {
            echo "<script>alert('Thank you for Subscribing');</script>";
        } else {
            echo "<script>alert('Message not sent');</script>";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/tour-booking-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:01 GMT -->

<head>
    <title>Tour Booking Left Sidebar</title>
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

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
</head>


<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>


        <!--======== SEARCH-OVERLAY =========-->



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
                                <li class="list-inline-item"><a href="login-1.html"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                <li class="list-inline-item"><a href="registration-1.html"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                <li class="list-inline-item">
                                    <form>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <div class="form-group currency">
                                                   
                                                </div><!-- end form-group -->
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="form-group language">
                                                    
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
                                <li><a href="landing-page.php" class="dropdown-item">Main Homepage</a></li>
                                
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

                        <!-- end sub-menu -->

                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->


        <!--================== PAGE-COVER ================-->
        <section class="page-cover" id="cover-tour-booking">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Tour Booking Left Sidebar</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Tour Booking Left Sidebar</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->


        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="flight-booking" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-5 col-xl-4 side-bar left-side-bar">
                            <div class="row">
                                <?php
                                if (isset($_GET['detail'])) {
                                    $id = $_GET['detail'];
                                    $SELECT = mysqli_query($conn, "SELECT * FROM tblpackages WHERE packageId='$id'");
                                    if (mysqli_num_rows($SELECT) > 0) {
                                        $fetch_package = mysqli_fetch_assoc($SELECT);
                                ?>
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="side-bar-block detail-block style2 text-center">
                                                <div class="detail-img text-center">
                                                    <div><img src="KarnatakaImages/<?php echo $fetch_package['image']; ?>" class="img-fluid" alt="feature-img" /></div>
                                                    <!-- <a href="#"><img src="images/tour-grid-1.jpg" class="img-fluid" alt="detail-img"/></a> -->
                                                    <div class="detail-title">
                                                        <h4><a href="#"><?php echo $fetch_package['name']; ?></a></h4>
                                                        <!-- <p>5 people max</p> -->
                                                    </div><!-- end detail-title -->

                                                    <span class="detail-price">
                                                        <h4>₹<?php echo $fetch_package['price']; ?> <span>/ person</span></h4>
                                                    </span>
                                                </div><!-- end detail-img -->

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td> Maximum 5 people</td>
                                                                <td>
                                                                    <div class="rating">
                                                                        <!-- <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star-o"></i></span> -->
                                                                    </div><!-- end rating -->
                                                                </td>
                                                            </tr>
                                                            <tr style="color:aliceblue">
                                                                <td>Package Details</td>
                                                                <td><?php echo $fetch_package['packagedetails']; ?></td>
                                                            </tr>
                                                            <tr style="color:aliceblue">
                                                                <td>Package Features</td>
                                                                <td><?php echo $fetch_package['packagefeatures']; ?></td>
                                                            </tr>
                                                            <tr style="color:aliceblue">
                                                                <td>Location</td>
                                                                <td><?php echo $fetch_package['packagelocation']; ?></td>
                                                            </tr>
                                                            <tr style="color:aliceblue">
                                                                <td>Pickup Point</td>
                                                                <td><?php echo $fetch_package['pickuppoint']; ?></td>
                                                            </tr>
                                                            <tr style="color:aliceblue">
                                                                <td>Price</td>
                                                                <td>₹<?php echo $fetch_package['price']; ?></td>
                                                            </tr>
                                                            <!-- <tr style="color:aliceblue">
                                                                <td>Totel Price</td>
                                                                <td>0000</td>
                                                            </tr> -->
                                                        </tbody>
                                                    </table>
                                                </div><!-- end table-responsive -->
                                            </div><!-- end side-bar-block -->
                                        </div><!-- end columns -->

                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="side-bar-block support-block">
                                                <h3>Need Help</h3>
                                                <p>Contact us for any enquires</p>
                                                <div class="support-contact">
                                                    <span><i class="fa fa-phone"></i></span>
                                                    <p>+91 89654752</p>
                                                    <span><i class="fa fa-envelope"></i></span>
                                                    <p>info@thetraveller.com</p>
                                                </div><!-- end support-contact -->
                                            </div><!-- end side-bar-block -->
                                        </div><!-- end columns -->
                                <?php }
                                } ?>
                            </div><!-- end row -->

                        </div><!-- end columns -->


                        <div class="col-12 col-md-12 col-lg-7 col-xl-8 content-side">
                            <form class="lg-booking-form" name="frm_booking" method="post">
                                <div class="lg-booking-form-heading">
                                    <span>1</span>
                                    <h3>Personal Information</h3>
                                </div><!-- end lg-bform-heading -->

                                <div class="personal-info">

                                    <div class="row">
                                        <div class="col-6 col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="hidden" name="pkgid" value="<?php echo $_GET['detail']; ?>">
                                                <input type="text" class="form-control" id="txt_name" name="fname" />
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-6 col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" id="txt_last_name" name="lname" />
                                            </div>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->

                                    <!-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" id="txt_country" name="txt_country"/>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" id="txt_email" name="email" />
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" id="txt_phone" name="phone" />
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Book for</label>
                                                <input type="date" class="form-control dpd3" id="txt_dob" name="tdate" />
                                                <script>
        // Get the current date
        var currentDate = new Date();
        
        // Add two days to the current date
        currentDate.setDate(currentDate.getDate() + 2);
        
        // Format the date as "YYYY-MM-DD" for the input field
        var formattedDate = currentDate.toISOString().split('T')[0];
        
        // Set the minimum attribute of the date input field to the calculated date
        document.getElementById("txt_dob").setAttribute("min", formattedDate);
    </script>


                                            </div>
                                        </div><!-- end columns -->

                                        <!-- <div class="row"> -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="form-control" id="txt_adults" name="package" required>
                                                    <option disabled selected value="">Package</option>
                                                    <option value="Solo">Solo</option>
                                                    <!-- <option value="Family">Family</option> -->
                                                    <!-- <option value="3">3</option> -->
                                                </select>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                        </div><!-- end columns -->
                                    </div>
                                </div><!-- end personal-info -->

                                <div class="lg-booking-form-heading">
                                    <span>2</span>
                                    <h3>Payment Information</h3>
                                </div><!-- end lg-bform-heading -->

                                <div class="payment-tabs">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item active"><a class="nav-link" href="#tab-credit-card" data-toggle="tab"> Via Credit Card</a></li>
                                        <!-- <li class="nav-item"><a class="nav-link" href="#tab-paypal" data-toggle="tab">Via Paypal</a></li> -->
                                    </ul>

                                    <div class="tab-content">
                                        <div id="tab-credit-card" class="tab-pane  in active">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Card Type</label>
                                                        <select class="form-control" name="ctype">
                                                            <option selected>Select</option>
                                                            <option>Debit Card</option>
                                                        </select>
                                                        <span><i class="fa fa-angle-down"></i></span>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Card Number</label>
                                                        <input type="text" class="form-control" id="txt_card_number" name="txt_card_number" />
                                                    </div>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Card Holder Name</label>
                                                        <input type="text" class="form-control" id="txt_holder_name" name="txt_holder_name" />
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>CVC</label>
                                                        <input type="text" class="form-control" id="txt_cvc_number" name="txt_cvc_number" />
                                                    </div>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->

                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group">
                                                        <label>Expiry Month</label>
                                                        <select class="form-control" id="ddl_expire_month" class="ddl_expire_month">
                                                            <option value="" selected>Select</option>
                                                            <option value="1">January</option>
                                                            <option value="2">February</option>
                                                            <option value="3">March</option>
                                                            <option value="4">April</option>
                                                            <option value="5">May</option>
                                                            <option value="6">June</option>
                                                            <option value="7">July</option>
                                                            <option value="8">August</option>
                                                            <option value="9">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>
                                                        <span><i class="fa fa-angle-down"></i></span>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-6 col-md-3">
                                                    <div class="form-group">
                                                        <label>Expiry Year</label>
                                                        <select class="form-control" id="ddl_expire_year" class="ddl_expire_year">
                                                            <option selected>Select</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                            <option>2026</option>
                                                        </select>
                                                        <span><i class="fa fa-angle-down"></i></span>
                                                    </div>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->

                                        </div><!-- end tab-credit-card -->

                                        <div id="tab-paypal" class="tab-pane ">
                                            <img src="images/paypal.png" class="img-fluid" alt="paypal" />
                                            <div class="paypal-text">
                                                <p><span>Important:</span> You will be redirected to Paypal Website to make the payment process secure and complete.</p>
                                                <a href="#" class="btn btn-default btn-lightgrey">Checkout via Paypal<span><i class="fa fa-angle-double-right"></i></span></a>
                                            </div><!-- end paypal-text -->

                                            <div class="clearfix"></div>
                                        </div><!-- end tab-paypal -->

                                    </div><!-- end tab-content -->
                                </div><!-- end payment-tabs -->

                                <div class="checkbox">
                                    <label><input type="checkbox" id="chk_agree" name="chk_agree" required> By continuing, you are agree to the <a href="page.php?type=Terms">Terms and Conditions.</a></label>
                                </div><!-- end checkbox -->
                                <div class="col-md-12 text-center" id="result_msg"></div>
                                <input type="submit" name="confirm" value="Confirm Booking">
                                <!-- <button type="submit" class="btn btn-orange" name="submit">Confirm Booking</button> -->
                            </form>

                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end flight-booking -->
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
                                    <input type="email" class="form-control input-lg" placeholder="Enter your email address" required />
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
                                <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                                <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-2 col-xl-2 footer-widget ftr-links">
                            <h3 class="footer-heading">COMPANY</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Flight</a></li>
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Cruise</a></li>
                                <li><a href="#">Cars</a></li>
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
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                            <ul class="social-links list-inline list-unstyled">
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                                <li class="list-inline-item"><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
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
                                <li class="list-inline-item"><a href="#">Terms & Condition</a></li>
                                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
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
    <!-- <script src="js/bootstrap-datepicker.js"></script> -->
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/custom-validation.js"></script>

    <!-- Page Scripts Ends -->
</body>

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/tour-booking-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:01 GMT -->

</html>