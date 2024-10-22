<?php
@include 'config.php';
if (isset($_POST['btnsend'])) {
    session_start();
    $uname = $_SESSION['name'];
    $email = $_POST['email'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- <title>Index</title> -->
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
                                @$uname = $_SESSION['name'];
                                if ($uname == '') {
                                    echo '<li class="list-inline-item"><a href="login-1.php"><span><i class="fa fa-lock"></i></span>Login</a></li>';
                                    echo '<li class="list-inline-item"><a href="registration-2.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>';
                                } else {
                                    echo '<li class="list-inline-item"><a href="logout.php"><span><i class="fa fa-lock"></i></span>Logout</a></li>';
                                    echo '<li class="list-inline-item"><a href="login-1.php"><span><i class="fa fa-lock"></i></span>welcome ' . $uname . '</a></li>';
                                };
                                ?>

                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->