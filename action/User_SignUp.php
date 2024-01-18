<?php 
require_once("../action/db_conn.php");
if(isset($_POST["signup-user"]) && isset($_FILES["user_Profile"])){
    $user_name =$_POST["user_name"];
    $user_email =$_POST["user_mail"];
    $user_contact =$_POST["user_Contact"];
    $user_pass    =$_POST["user_pwd"];
    $targetlocation ="../profile_image/";
    $user_profile_img =$_FILES["user_Profile"]["name"];
    $filepath =$_FILES['user_Profile']['full_path'];
    $filetype =$_FILES['user_Profile']['type'];
    $filesize =$_FILES['user_Profile']['size'];
    $temp_name = $_FILES['user_Profile']['tmp_name'];
    move_uploaded_file("$temp_name",$targetlocation.$user_profile_img);
    $insert_user ="INSERT INTO user_table (user_name,email,contact,password,profile_image,role,status) VALUES('$user_name','$user_email','$user_contact','$user_pass','$user_profile_img','user','0')";
    if(mysqli_query($conn,$insert_user) == TRUE){
       // echo"1";
        header("location:../user_sign_log.php#user_signup");
    }else{
        echo"fail";
    }  

}
?>