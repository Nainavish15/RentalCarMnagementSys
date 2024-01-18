<!DOCTYPE html>
<html lang="en">
  <?php 
  ob_start();
  require_once("./action/db_conn.php");?>
  <head>
    <title>Rental Car Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <?php require_once("./layoyt/navbar.php"); ?>
    <!-- END nav -->
<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5" >
	            <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
	            <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center" id="signup">
	            	
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light" id="">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						<form action="./action/User_SignUp.php" class="request-form ftco-animate bg-primary" method="post" enctype="multipart/form-data">
		          		<h2>User SignUp</h2>
			    				<div class="form-group">
			    					<label for="" class="label"> Username</label>
			    					<input type="text" class="form-control" placeholder="Username" name="user_name" autocomplete="off">
			    				</div>
			    				<div class="form-group">
			    					<label for="" class="label">Email</label>
			    					<input type="email" class="form-control" placeholder="Email" name="user_mail" autocomplete="off">
			    				</div>
                                <div class="form-group">
			    					<label for="" class="label">Contact</label>
			    					<input type="text" class="form-control" placeholder="Contact" name="user_Contact" autocomplete="off">
			    				</div>
                                <div class="form-group">
			    					<label for="" class="label">Password</label>
			    					<input type="password" class="form-control" placeholder="Password" name="user_pwd" autocomplete="off">
			    				</div>
                                <div class="form-group"  >
                                <label for="" class="label">Upload Profile</label>                                    
                                <div class="input-group">
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" name="user_Profile"  autocomplete="off">
                                <label class="custom-file-label">Upload</label>
                                </div>
                                <div class="input-group-append">
                                <input type="button" value="Upload" class="btn btn-warning" id="UpdateImageNew">
                                </div>
                                </div>  
                                 </div>
			            <div class="form-group">
			              <input type="submit" value="SignUp" class="btn btn-secondary py-3 px-4" name="signup-user">
			            </div>
			    			</form>
	  					</div>
	  					<div class="col-md-8 d-flex align-items-center" id="user_signup">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Log in for user</h3>
	  							<form action="<?php $_SERVER['PHP_SELF']?>" class="request-form ftco-animate bg-primary"  method="post">
		          		<h2>User Login</h2>
			    				<div class="form-group">
			    					<label for="" class="label">Enter Email</label>
			    					<input type="email" class="form-control" placeholder="Email" name="user_log_email" autocomplete="off">
			    				</div>
			    				<div class="form-group">
			    					<label for="" class="label">Password</label>
			    					<input type="password" class="form-control" placeholder="Password" name="user_log_pwd" autocomplete="off">
			    				</div>      
			            <div class="form-group">
			              <input type="submit" value="Login" class="btn btn-secondary py-3 px-4" name="user_login">
			            </div>
			    			</form>
                <?php
    if(isset($_POST["user_login"])){
    $user_log_Mail= $_POST["user_log_email"];
    $user_log_pwd =$_POST["user_log_pwd"];
    $user_login_quary ="SELECT * FROM user_table WHERE email='$user_log_Mail' AND password='$user_log_pwd'";
    $result= mysqli_query($conn,$user_login_quary);
    if($fetch_info = mysqli_fetch_assoc($result)){
      session_start();
        $_SESSION['user_id_log'] =$fetch_info['user_id'];
        $_SESSION['user_name'] =$fetch_info['user_name'];
        $_SESSION['user_email'] =$fetch_info['email'];
        $_SESSION['user_contact']=$fetch_info['contact'];
        $_SESSION['user_pwd']=$fetch_info['password'];
        $_SESSION['user_profile_image']=$fetch_info['profile_image'];
        $_SESSION['user_role']=$fetch_info['role'];
        $_SESSION['user_status']=$fetch_info['status'];
        if(($fetch_info['role'] == "user")){
          header("location:./user_home_page.php#user_home");
        }
        else{
          echo"<div class='text-danger font-weight-bold'>Invaild Username and Password</div>";
        }
    }

   }
 ob_end_flush();
?>
					        <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p> -->
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>

    <?php require_once("./layoyt/footerlinks.php");?>
  </body>
</html>