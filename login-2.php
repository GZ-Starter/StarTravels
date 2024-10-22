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

         $_SESSION['name'] = $r['name'];
         echo "<script type='text/javascript'> document.location = './AD/dashboard.php'; </script>";

      }elseif($row['usertype'] == 'user'){

         $_SESSION['name'] = $r['name'];
         header('location:tour-homepage.php');

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
        header('location:login-2.php');
     }
  }

};
?>
<!doctype html>
<html lang="en">
    
<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:36 GMT -->
<head>
        <title>Login 2</title>
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
                                <h3 class="company-name"><span><i class="fa fa-plane"></i>Star</span>Travels</h3>
                                <p>Lorem ipsum dolor sit amet, conse adipiscing elit. Curabitur metus felis, venenatis eu ultricies vel, vehicula eu urna. Phasellus eget augue id est fringilla feugiat id a tellus. Sed hendrerit quam sed ante euismod posuere ultricies. </p>
                            </div><!-- end full-page-title -->
                            
                            <div class="custom-form custom-form-fields">
                                <h3>Login</h3>
                                <form> 
                                <div class="form-group">
                                                 <input type="text" class="form-control" placeholder="email" name="email"  required/>
                                                 <span><i class="fa fa-user"></i></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                 <input type="password" class="form-control" placeholder="Password" name="password" required/>
                                                 <span><i class="fa fa-lock"></i></span>
                                            </div>
                                    
                                    <div class="checkbox">
                                         <label><input type="checkbox"> Remember me</label>
                                    </div>
                                    
                                    <button class="btn btn-orange btn-block">Login</button>
                                </form>
                                
                                <div class="other-links">
                                    <p class="link-line">New Here ? <a href="registration-2.php">Signup</a></p>
                                    <a class="simple-link" href="#">Forgot Password ?</a>
                                </div><!-- end other-links -->
                            </div><!-- end custom-form -->
                            
                            <p class="full-page-copyright">© 2023 The Traveller. All rights reserved.</p>
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

<!-- Mirrored from kiswa.net/themes/star-travel/demo/demo-ltr/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 06:44:36 GMT -->
</html>
