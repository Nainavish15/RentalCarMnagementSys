<?php
if(isset($_POST["e_Edit_vehicle"])){
   require_once("./db_conn.php");
   $update_id = $_POST["edit_owner_id"];
   $update_v_name = $_POST["e_v_model_name"];
   $update_v_number = $_POST["e_v_number"];
   $update_v_seating = $_POST["e_seating_space"];
   $update_rent = $_POST["e_rent_per_day"];
   $update_details= $_POST["e_vihcle_details"];
   $update_vehicle="UPDATE vehicle_info SET vehicle_model='$update_v_name',vehicle_number='$update_v_number',seating_capacity='$update_v_seating',vehicle_details='$update_details',rent_per_day='$update_rent' WHERE v_id=$update_id";
   print_r($update_vehicle);
   if($update_result =mysqli_query($conn,$update_vehicle) == TRUE){
     // echo"ok";
     header("location:../view_owner_total_vehicle.php#v_display");
    }else{
        echo"no";
    }
}
?>