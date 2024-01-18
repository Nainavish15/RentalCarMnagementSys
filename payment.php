<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script></head>
</head>
<!-- Modal -->

            
           
            

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalNatasha">

  Open modal
  
</button> -->
<?php require_once("./layoyt/navbar.php");
require_once("./action/db_conn.php");
  ?>
    <div class="modal-dialog modal-dialog-centered" >
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
            <?php 
            $booking_current_id = $_GET["id"];
            $user_id_booking =$_SESSION['user_id_log'];
           
            $insert_pay="SELECT * FROM booking_master WHERE user_id='$user_id_booking' AND booking_id='$booking_current_id'";
            $result_pay=mysqli_query($conn,$insert_pay) or die("query failed");
            while($to_plat_pay = mysqli_fetch_assoc($result_pay)){
                ?>
        <h3>Payable Ammount <span><?php echo $to_plat_pay['payable_amount'];?>₹</span></h3>
        <?php }?>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
         <input class="btn btn-primary float-right mt-5" type="submit" name="in_btn_payment" value="Pay" id="BtnForPayment" style="margin-right: 15px;"> 
         </form>  
        </div>
            
        <div class="modal-footer">
          <button type="button" class="btn btn-default"><a href="">Close</a></button>
        </div>
      </div>   
    </div>
    <?php
    if(isset($_POST["in_btn_payment"])){
        
      
      $pay_update = "UPDATE booking_master SET payment_status ='confirm' WHERE booking_id='$booking_current_id'";
      if(($pay_result = mysqli_query($conn,$pay_update)) == true){
        header("location:./view_user_booking.php#booking-page");
        //echo'1';
      }else{
        echo'0';
      }

    }
    ?>
    
  </body>
</html>