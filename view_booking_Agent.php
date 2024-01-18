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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
   
  <?php require_once("./layoyt/navbar.php");
    if(isset( $_SESSION['user_email']) &&  isset($_SESSION['user_role']) == "user"){
      header("location:./user_sign_log.php");
    }
   ?>

    <!-- END nav -->
    
    <?php
   require_once("./action/db_conn.php");
        $owner_id_log = $_SESSION['owner_id'];
        $fetch_all_booking="SELECT * FROM user_table LEFT JOIN booking_master ON user_table.user_id = booking_master.user_id WHERE owner_id='$owner_id_log'";
        $fetch_all_booking_result = mysqli_query($conn, $fetch_all_booking);
   ?> 
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Vehicle Display <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Total Booking Display</h1>
          </div>
        </div>
      </div>
      <!-------------------------------------------View Booking Modal------------------------------------------------->
      <div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header">
      <h4 class="modal-title">View Booking Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="view_details">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------->
    </section>
    <div class="container" id="booking-page-agent">
    <div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Responsive Hover Table</h3>
<div class="card-tools">
<div class="input-group-append">
<button type="submit" class="btn btn-default">
<i class="fas fa-search"></i>
</button>
</div>
</div>
</div>
</div>
    <div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
<tr>
        <th>Booking id</th>
        <th>User Name</th>
        <th>User Contact </th>
        <th>View Booking</th>
        <th>Confirm Booking</th>
        
        
</tr>
</thead>
<tbody>
<tr>
    <?php while($row_result_fetch=mysqli_fetch_array($fetch_all_booking_result)){?>
        <td><?php echo $row_result_fetch['booking_id']; ?></td>
        <td><?php echo $row_result_fetch['user_name'];?></td>
        <td><?php echo $row_result_fetch['contact'];?></td>
        <td><a data-id="<?php echo $row_result_fetch['booking_id'];?>" class="viewBookingInfo"><i class="fa fa-eye" aria-hidden="true"></a></i></td>
        <td><a data-id="<?php echo $row_result_fetch['booking_id'];?>" class="removeBooking"><i class="fa fa-check" aria-hidden="true"></a></i></td>
        

</tr>
<?php } ?>
</tbody>
</table>
</div>

</div>

</div>
</div>
</div> 

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
    $(document).on("click",".viewBookingInfo",function(){
      
      ($(this).attr("data-id"));
      var booking_id =$(this).attr("data-id");

      $("#myModal").modal('show');
      $.ajax({
   url:"./Action/view_booking_details.php",
   type:"POST",
   data:{bid:booking_id  },
   success: function(data){
    $("#view_details").html(data);
   }
  })
    })
    $(document).on("click",".removeBooking",function(){
      
      alert(($(this).attr("data-id")));
      var booking_id_c =$(this).attr("data-id");
      $.ajax({
   url:"./Action/confirm_booking_by_agent.php",
   type:"POST",
   data:{bid:booking_id_c},
   success: function(data){
    if(data == 1){
      Swal.fire(
  'Booking Confirm',
  'Booking Confirm',
  'success'
)
    }
   }
  })

      
    })
   </script> 
  </body>
</html>