<?php
require_once("../action/db_conn.php");
if((isset($_POST["Regis-Agency"])) && isset($_FILES["Agency_Profile"])){
$agent_name = $_POST["Agency_o_name"];
$agent_email = $_POST["Agency_mail"];
$agent_contact = $_POST["Agency_Contact"];
$agent_pwd = $_POST["Agency_pwd"];
$targetlocation ="../profile_image/";
$agent_Agency_Profile = $_FILES["Agency_Profile"]["name"];
// File Info
$filepath =$_FILES['Agency_Profile']['full_path'];
$filetype =$_FILES['Agency_Profile']['type'];
$filesize =$_FILES['Agency_Profile']['size'];
$temp_name = $_FILES['Agency_Profile']['tmp_name'];
move_uploaded_file("$temp_name",$targetlocation.$agent_Agency_Profile);
$Car_insert_quary="INSERT INTO user_table (user_name,email,contact,password,profile_image,role,status) VALUES('$agent_name','$agent_email','$agent_contact','$agent_pwd','$agent_Agency_Profile','car_owner','0')";
if(mysqli_query($conn,$Car_insert_quary) == TRUE){
    header("location: ../signup_car_agency.php#login");
}else{
   echo"<script src='../js/jquery.min.js'></script>
   <script src='../js/jquery-migrate-3.0.1.min.js'></script>
   <script>alert('There is technical issue! try again leter');</script>
   ";
}

}
