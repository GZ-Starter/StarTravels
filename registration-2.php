<?php
@include 'config.php';

session_start();

if(isset($_POST['register'])){
  $name =$_POST['sname'];
  $dob =$_POST['dob'];
  $add =$_POST['add'];
  $email =$_POST['semail'];
  $phone =$_POST['ph'];
  $pass = $_POST['pass'];
  $cpass =$_POST['cpass'];
  $user_type = 'user';

  $select = " SELECT * FROM tbllogin WHERE email = '$email' && password = '$pass' ";

  @$result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0) {

     $err[] = 'user already exist!';
     echo "<script>alert('User already exists');</script>";

  } else{

     if($pass != $cpass){
        $err[] = 'password not matched!';
     }else{
        $insert = "INSERT INTO tblregister(name,dob,address,email,phone,password) VALUES('$name','$dob','$add','$email','$phone','$pass')";
        mysqli_query($conn, $insert);
        
        echo "<script>alert('Registration Complete');</script>";

        $insert = "INSERT INTO tbllogin(email, password, usertype) VALUES('$email','$pass','$user_type')";
        mysqli_query($conn, $insert);
        header('location:login-1.php');
     }
  }

};
?>
<!doctype html>
<html lang="en">
    
<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/registration-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:36 GMT -->
<head>
        <title>Registration 2</title>
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
                            
                            <div class="custom-form custom-form-fields">
                                <h3>Registration</h3>
                                <form method="post">        
                                    <div class="form-group">
                                         <input type="text" maxlength="30" oninvalid="this.setCustomValidity('Enter only text input')" onchange="this.setCustomValidity('')" required placeholder="Enter the name"  class="form-control" placeholder="Username" name="sname" pattern="[a-zA-Z]+" required/>
                                         <span><i class="fa fa-user"></i></span>
                                    </div>

                                    <div class="form-group">
                                         <input type="date" class="form-control" placeholder="Date of birth" name="dob"  required/>
                                         <span><i class="fa fa-user"></i></span>
                                    </div>

                                    <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Address" name="add"  required/>
                                         <span><i class="fa fa-user"></i></span>
                                    </div>
    
                                    <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Email" name="semail"  required/>
                                         <span><i class="fa fa-envelope"></i></span>
                                    </div>
                                    
                                    <div class="form-group">
                                         <input type="tel" class="form-control" placeholder="Phone Number" name="ph" pattern="[0-9]{10}" maxlength="10" required/>
                                         <span><i class="fa fa-phone"></i></span>
                                    </div>

                                    <div class="form-group">
                                         <input type="password" class="form-control" placeholder="Password" name="pass"  minlength="8" maxlength="20" placeholder="Enter password" onchange="CheckPassword(document.form1.password)"/> >
                                         <span><i class="fa fa-lock"></i></span>
                                    </div>
    
                                    <div class="form-group">
                                         <input type="password" class="form-control" placeholder="Confirm Password" name="cpass" required/>
                                         <span><i class="fa fa-lock"></i></span>
                                    </div>
                                    
                                    <button class="btn btn-orange btn-block" name="register">Register</button>
                                </form>
                                
                                <div class="other-links">
                                    <p class="link-line">Already Have An Account ? <a href="login-1.php">Login Here</a></p>
                                </div><!-- end other-links -->
                            </div><!-- end custom-form -->
                            
                            <p class="full-page-copyright">© 2023 TheTraveller. All rights reserved.</p>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end full-page-form -->
        	<div class="colored-border"></div>
		</section>


        <!-- Page Scripts Starts -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-4.4.1.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/registration-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:36 GMT -->
</html>
