<?php
@include 'config.php';

session_start();

if (isset($_POST['btnupdate'])) {
    $uname = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    if ($pass != $cpass) {
        echo "<script>alert('Password not matched');</script>";
    } else {
       $update_query = mysqli_query($conn, "UPDATE `tblregister` SET password = '$pass' WHERE email = '$uname'");
       $update_query = mysqli_query($conn, "UPDATE `tbllogin` SET password = '$pass' WHERE email = '$uname'");
 
       if ($update_query) {
        echo "<script>alert('Password updated successfully');</script>";
          header('location:login-1.php');
       } else {
        echo "<script>alert('Failed to update password');</script>";
          header('location:login-1.php');
       }
    }
 }
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/forgot-password-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:36 GMT -->
<head>
    <title>Forgot Password 2</title>
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
            
        
        <!--===== FULL-PAGE-FORM ====-->
        <section>
            <div class="colored-border"></div>
            <div id="full-page-form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="full-page-title">
                                <h3 class="company-name"><span><i class="fa fa-plane"></i>The</span>Traveller</h3>
                                <!-- <p>Lorem ipsum dolor sit amet, conse adipiscing elit. Curabitur metus felis, venenatis eu ultricies vel, vehicula eu urna. Phasellus eget augue id est fringilla feugiat id a tellus. Sed hendrerit quam sed ante euismod posuere ultricies. </p> -->
                            </div><!-- end full-page-title -->
                            
                            <div id="forgot-password">
                                <div class="custom-form custom-form-fields">
                                    <h3>Forgot Password</h3>

                                    <form method="post">   
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Your Email" name="email" required/>
                                             <span><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Enter new password" name="pass" required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Confirm new password" name="cpass" required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
                                        
                                        <button class="btn btn-orange btn-block" name="btnupdate">Update</button>
                                    </form>
                                        
                                    <div class="other-links">
                                        <p class="link-line">Already Have An Account ? <a href="#">Login Here</a></p>
                                        <p class="link-line">New Here ? <a href="#">Join Us</a></p>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                            </div><!-- end forgot-password -->
                            
                            <p class="full-page-copyright">© 2023 TheTraveller. All rights reserved.</p>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end full-page-form -->
            <div class="colored-border"></div>
        </section>
    </div>
    

    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <!-- Page Scripts Ends -->
</body>

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/forgot-password-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:36 GMT -->
</html>
