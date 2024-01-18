<!DOCTYPE html>
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
    
  <?php require_once("./layoyt/navbar.php");
   if(!isset( $_SESSION['user_email']) &&  isset($_SESSION['user_role']) != "user"){
    header("location:./user_sign_log.php#user_signup");
  }
  ?>
    <!-- END nav -->
<?php
require_once("./action/db_conn.php");
$user_id_b= $_SESSION['user_id_log'];
$vehicle_id = $_GET["vehicleid"];
$get_rent ="select * from vehicle_info where v_id='$vehicle_id'";
$get_rent_result= mysqli_query($conn,$get_rent);
if($fetch_rent = mysqli_fetch_assoc($get_rent_result)){
$v_rent = $fetch_rent['rent_per_day'];
$v_model =$fetch_rent['vehicle_model'];
$v_number =$fetch_rent['vehicle_number'];
$v_cap=$fetch_rent['seating_capacity'];
$v_img =$fetch_rent['vehicle_image'];
$v_del =$fetch_rent['vehicle_details'];
$v_s =$fetch_rent['v_status'];
$owner_id = $fetch_rent['owner_id'];
}                       
?>
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center" >
          <div class="col-lg-8 ftco-animate">          
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters" >
	  					<div class="col-md-4 d-flex align-items-center" style="margin-top:250px; ">
                          <div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/<?php echo $v_img ; ?>);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#"><?php echo $v_model; ?></a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat" style="color: black;"><?php echo $v_cap; ?></span>
			    						<p class="price ml-auto"><?php echo $v_rent; ?><span style="color:black">/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#"><span style="color:black">Vehcile Number</span></a> <a href="#"><span style="color:black; font-weight:bold;"><?php echo $v_number; ?></span></p></a></p>
		    					</div>
		    				</div>
	  					</div>
                          <div class="col-md-8 d-flex align-items-center" style="margin-top:230px;">
	  						<!-- <div class="services-wrap rounded-right w-100"> -->
                              <form action="./action/user_booking_action.php" class="request-form ftco-animate bg-primary" method="post">
		          		<h2>Make your trip</h2>
                          <input type="hidden" class="form-control" value="<?php echo $vehicle_id ;?>" name="v_id_booking">
                          <input type="hidden" class="form-control" value="<?php echo $user_id_b; ?>" name="user_id_booking">
                          <input type="hidden" class="form-control" value="<?php echo $v_rent ; ?>" name="vehicle_rent">
                          <input type="hidden" class="form-control" value="<?php echo $owner_id ; ?>" name="vehicle_owner_id">

			    				
                                <div class="form-group">
			    					<label for="" class="label">Pick-up location</label>
			    					<input type="text" class="form-control" placeholder="City, Airport, Station, etc" name="pic_loc">
			    				</div>
			    				<div class="form-group">
			    					<label for="" class="label">Drop-off location</label>
			    					<input type="text" class="form-control" placeholder="City, Airport, Station, etc" name="drop_loc">
			    				</div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
			                <label for="" class="label">Pick-up date</label>
			                <input type="date" class="form-control"  placeholder="Date" name="pic_date">
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Drop-off date</label>
			                <input type="date" class="form-control"  placeholder="Date" name="drop_date">
			              </div>
                          <div class="form-group ml-2">
                      <label for="" class="label">Total Days</label>
                    <select class="form-control"placeholder="Choose Type" name="total_days">
                    <option value="0" class="label" style="color: black;" selected>Choose Type</option>   
                    <option value="1" class="label" style="color: black;">1</option>
                    <option value="2" class="label" style="color: black;">2</option>
                    <option value="3" class="label" style="color: black;">3</option>
                    <option value="4" class="label" style="color: black;">4</option>
                    <option value="5" class="label" style="color: black;">5</option> 
                    <option value="6" class="label" style="color: black;">6</option> 
                    <option value="7" class="label" style="color: black;">7</option> 
                    <option value="8" class="label" style="color: black;">8</option> 
                    <option value="9" class="label" style="color: black;">9</option> 
                    <option value="10" class="label" style="color: black;">10</option> 
                </select>
                  </div>
		              </div>
                      
		              <div class="form-group">
		                <label for="" class="label">Pick-up time</label>
		                <input type="time" class="form-control"  placeholder="Time" name="pic_time">
		              </div>
                      <div class="form-group">
			    					<label for="" class="label">Optional Contact</label>
			    					<input type="text" class="form-control" placeholder="Optional Contact" name="option_con">
			    				</div>
			            <div class="form-group">
			              <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4" name="Booking">
			            </div>
			    			</form>
                    </div>
                <!-- </div> -->
	  				</div>
				</div>
  		</div>
      
          </div>
        </div>
      </div>
    </div>
     <section class="ftco-section ftco-no-pt bg-light">
    	
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
 <script>
    $(document).on("click","book_off_date",function(){
        var data =  $("#book_pick_date").val();
alert(data);
    })
 
 </script> 
</body>
</html>