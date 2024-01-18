<?php
require_once("./db_conn.php");
if(isset($_POST["Booking"])){
   $vehicle_id = $_POST["v_id_booking"];
   $user_id_ref =  $_POST["user_id_booking"];
   $v_owner_id = $_POST['vehicle_owner_id'];
   $vehicle_rent = $_POST["vehicle_rent"];
   $pick_location = $_POST["pic_loc"];
   $drop_location = $_POST["drop_loc"];
   $pic_date = $_POST["pic_date"];
   $drop_date = $_POST["drop_date"];
   $total_days = $_POST["total_days"];
   $pic_up_time = $_POST["pic_time"];
   $contact_optional = $_POST["option_con"];
   //calculate Payable Ammount
   $calculate_payable_ammount =( $total_days*$vehicle_rent);
   $insert_booking = "INSERT INTO booking_master (user_id,owner_id,vehicle_id,pick_up_loc,drop_off_loc,pick_up_date,drop_off_date,total_days,pick_up_time,optional_contact,payable_amount) VALUES($user_id_ref,$v_owner_id,$vehicle_id,'$pick_location','$drop_location','$pic_date','$drop_date','$total_days','$pic_up_time','$contact_optional','$calculate_payable_ammount')";
   if(mysqli_query($conn,$insert_booking) == TRUE){
      $Lastbooking_id= mysqli_insert_id($conn);
      echo $Lastbooking_id;
    header("location:../payment.php?id=$Lastbooking_id;");
   }else{
    echo"no";
   }

}
?>