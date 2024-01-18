<?php session_start();?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                <?php if(!isset($_SESSION['owner_email']) && !isset($_SESSION['user_email'])){ ?>
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="./view_vehicle_user.php#v_display_user" class="nav-link">Book Vehicle</a></li>
	          <li class="nav-item"><a href="user_sign_log.php#user_signup" class="nav-link">Signup/login User</a></li>
	          <li class="nav-item"><a href="./signup_car_agency.php#signup" class="nav-link">Signup/login Car Agency</a></li>

<?php }?>
<?php if(isset($_SESSION['owner_email']) &&  isset($_SESSION['owner_role']) == "car_owner"){ ?>
            <li class="nav-item"><a href="car_rental_agency.php#Add_Vehicle_div"  class="nav-link">Home</a></li>
            <li class="nav-item"><a href="./view_owner_total_vehicle.php#v_display"  class="nav-link">Display Vehicle</a></li>
            <li class="nav-item"><a href="./view_booking_Agent.php#booking-page-agent"  class="nav-link">View Booking</a></li>
            <li class="nav-item"><a href="./action/logout.php"  class="nav-link">Logout</a></li>
<?php }?>
<?php if(isset( $_SESSION['user_email']) &&  isset($_SESSION['user_role']) == "user"){ ?>
            <li class="nav-item"><a href="./user_home_page.php#user_home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="./view_vehicle_user.php#v_display_user" class="nav-link">Book Vehciles</a></li>
            <li class="nav-item"><a href="./view_user_booking.php#booking-page" class="nav-link">View Bookings</a></li>
            <li class="nav-item"><a href="./action/logout_user.php" class="nav-link">Logout</a></li>
			<?php }?>
	        </ul>
	      </div>
	    </div>
	  </nav>