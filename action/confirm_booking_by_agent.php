<?php
$id_confirm_booking = $_POST["bid"];
require_once("./db_conn.php");
$booking_confirm_quary ="UPDATE booking_master SET booking_status='confirm' WHERE booking_id='$id_confirm_booking'";
if(mysqli_query($conn,$booking_confirm_quary) == TRUE){
    echo 1;
}else{
    echo 0;
}
?>