<?php
session_start();
session_unset();
session_destroy();
header("location: ../signup_car_agency.php#signup");
?>