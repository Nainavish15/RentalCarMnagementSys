<?php 
require_once("../action/db_conn.php");
if((isset($_POST["add_vehicle"])) && isset($_FILES['V_img'])){
    $Owner_User_id = $_POST["owner_id"];
    $vehicle_model = $_POST["v_model_name"];
    $vehicle_number = $_POST["v_number"];
    $vehicle_capicity = $_POST["seating_space"];
    $vehicle_details_text = $_POST["vihcle_details"];
    $vehicle_rent = $_POST["rent_per_day"];
    $vehicle_image =$_FILES["V_img"]["name"];
    $targetlocationv ="../images/";
    $filepath =$_FILES['V_img']['full_path'];
    $filetype =$_FILES['V_img']['type'];
    $filesize =$_FILES['V_img']['size'];
    $temp_name = $_FILES['V_img']['tmp_name'];
    move_uploaded_file("$temp_name",$targetlocationv.$vehicle_image);
    $vehicle_insert_quary="INSERT INTO vehicle_info(owner_id,vehicle_model,vehicle_number,seating_capacity,rent_per_day,vehicle_image,vehicle_details )VALUES($Owner_User_id,'$vehicle_model','$vehicle_number','$vehicle_capicity','$vehicle_rent','$vehicle_image','$vehicle_details_text')";
    if(mysqli_query($conn,$vehicle_insert_quary) == TRUE){
       header("location:../view_owner_total_vehicle.php#v_display");
    }else{
        echo"<script src='../js/jquery.min.js'></script>
   <script src='../js/jquery-migrate-3.0.1.min.js'></script>
   <script>alert('There is technical issue! try again leter');</script>
   ";
    }
}
?>