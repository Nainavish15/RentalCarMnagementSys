<!DOCTYPE html>
<?php 
   ?>
<html lang="en">
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
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Edit Vehicles On Rent<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Edit Vehicle </h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section" id="Add_Vehicle_div">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
                <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-user-o"></span>
			          	</div>
                        <?php
                        $vehicle_id = $_GET["v_id"];
                        require_once("./action/db_conn.php");
                        $view_vehicle_edit="SELECT * FROM vehicle_info WHERE v_id ='$vehicle_id'";
                        $view_result = mysqli_query($conn,$view_vehicle_edit);
                        while($fetch_vehicle = mysqli_fetch_array( $view_result)){
                            $vehicle_id_edit =$fetch_vehicle['v_id'];
                            $vehcileName_edit =$fetch_vehicle['vehicle_model'];
                            $vehcileImg_edit =$fetch_vehicle['vehicle_image'];
                            $vehcilerent_edit =$fetch_vehicle['rent_per_day'];
                            $vehicle_capcity_edit=$fetch_vehicle['seating_capacity'];
                            $vehcilenumber_edit=$fetch_vehicle['vehicle_number'];
                            $vehciledetails_edit=$fetch_vehicle['vehicle_details'];
                            $vehcilestatus_edit=$fetch_vehicle['v_status'];
                        ?>
			            <p><span>Edit Vehicle Picture</span> <img src="./images/<?php echo $vehcileImg_edit ;?>" class="img-circle elevation-2" style="height: 170px; width:250px; " id="proimg" alt="User Image" /></p>
			          </div>
                      
		          </div><br><br>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		
			          	</div>
			            
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <form action="./action/edit_vehicle_details_quary.php" class="bg-light p-5 contact-form" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <input type="hidden" class="form-control" placeholder="Agency_Owner_id" value="<?php echo  $vehicle_id_edit; ?>" name="edit_owner_id">
                <input type="text" class="form-control" placeholder="Vehicle Model Name" name="e_v_model_name" value="<?php echo $vehcileName_edit;?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Vehicle Number" name="e_v_number" value="<?php echo $vehcilenumber_edit;?>">
              </div>
              <div class="form-group">
                    <select class="form-control" name="e_seating_space" placeholder="Choose Type">
                    <option value="<?php echo $vehicle_capcity_edit; ?>" class="form-control" selected><?php echo $vehicle_capcity_edit; ?></option>    
                    <option value="Two Seater" class="form-control">Two Seater</option>
                    <option value="Four Seater" class="form-control">Four Seater</option>
                    <option value="Five Seater" class="form-control">Five Seater</option>
                    <option value="Six Seater" class="form-control">Six Seater</option> 
                    <option value="Seven Seater" class="form-control">Seven Seater</option>
                    <option value="nine Seater" class="form-control">Eight Seater</option> 
                    <option value="nine Seater" class="form-control">nine Seater</option> 
                </select>
                  </div>
                  <div class="form-group">
                <input type="text" class="form-control" placeholder="Per Day Rent" name="e_rent_per_day" value="<?php echo $vehcilerent_edit;?>">
              </div>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Add Details Vehicle" name="e_vihcle_details" value="<?php echo $vehciledetails_edit;?>">
              </div>
              <div class="form-group">
                <input type="submit" value="Edit  Vehicle" class="btn btn-warning py-3 px-5" name="e_Edit_vehicle">
              </div>
              <div class="form-group">
                <input type="submit" value="Unavailible Vehicle" class="btn btn-danger py-3 px-4" name="remove_vehicle">
              </div>
            </form>
          
          </div>
        </div>
        
      </div>
      <?php }?>
    </section>
	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php require_once("./layoyt/footerlinks.php");?>
  

  </body>
</html>