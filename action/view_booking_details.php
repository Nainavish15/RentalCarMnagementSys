<?php
$booking_id =$_POST['bid'];
//echo $booking_id ;
require_once("./db_conn.php");
$booking_fetch ="Select * from booking_master left join vehicle_info on booking_master.vehicle_id=vehicle_info.v_id where booking_id='$booking_id'";
$result =  mysqli_query($conn,$booking_fetch);
$output = "";
 while($row_b = mysqli_fetch_assoc($result)){
    $output .="<section class='ftco-section contact-section'>
    <h1>View Booking Details </h1>
    <div class='container'>
    
      <div class='row d-flex mb-5 contact-info'>
          <div class='col-md-4'>
              <div class='row mb-5'>
            
                <div class='col-md-12'>
                    <div class='border w-100 p-4 rounded mb-2 d-flex'>
                        
                    <img src='./images/{$row_b["vehicle_image"]}' class='img-circle elevation-2' style='height: 120px; width:260px; ' id='proimg' alt='User Image' /> 
                    </div>
                </div>
                <div class='col-md-12'>
                    <div class='border w-100 p-4 rounded mb-2 d-flex'>
                        <div class='icon mr-3'>
                           
                        </div>
                      <p><span>Modal Name</span> <a href=''>{$row_b["vehicle_model"]}</a></p><br>
                      

                    </div>
                    <div class='border w-100 p-4 rounded mb-6 d-flex'>
                    <p><span>Searting Capacity</span> <a href=''>{$row_b["seating_capacity"]}</a></p>
                    </div>
                </div>
                <div class='col-md-12'>
                    <div class='border w-100 p-4 rounded mb-2 d-flex'>
                      <p><span>Vehicle Number</span> <a href=''>{$row_b["vehicle_number"]}</a></p><br>
                    </div>
                    <div class='border w-100 p-4 rounded mb-6 d-flex'>
                    <p><span>Rent Per Day</span> <a href=''>{$row_b["rent_per_day"]}</a></p>
                    </div>
                    <div class='border w-100 p-4 rounded mb-6 d-flex'>
                    <p><span>Vehicle Details</span> <a href=''>{$row_b["vehicle_details"]}</a></p>
                    </div>
                </div>
              </div>
        </div>
        
        <div class='col-md-8 block-9 mb-md-5'>
          <form action='#' class='bg-light p-5 contact-form'>
            <div class='form-group'>
            <label  class='label'>Pick-up Location</label>
              <input type='text' class='form-control'  value='{$row_b["pick_up_loc"]}' >
            </div>
            <div class='form-group'>
            <label  class='label'>Drop Off Location</label>

              <input type='text' class='form-control'  value='{$row_b["drop_off_loc"]}'>
            </div>
            <div class='form-group'>
            <label  class='label'>pick up date</label>

              <input type='text' class='form-control'  value='{$row_b["pick_up_date"]}'>
            </div>
            <div class='form-group'>
            <label  class='label'>drop off date</label>

            <input type='text' class='form-control'  value='{$row_b["drop_off_date"]}'>
          </div>
           <div class='form-group'>
           <label  class='label'>Total days</label>

          <input type='text' class='form-control'  value='{$row_b["total_days"]}'>
        </div>
         <div class='form-group'>
         <label  class='label'>pick up time</label>

        <input type='text' class='form-control'  value='{$row_b["pick_up_time"]}'>
      </div>
      <div class='form-group'>
      <label  class='label'>optional_contact</label>

     <input type='text' class='form-control'  value='{$row_b["optional_contact"]}'>
   </div> 
   <div class='form-group'>
   <label  class='label'> payable_amount </label>

  <input type='text' class='form-control'  value='{$row_b["payable_amount"]}'>
</div>
<div class='form-group'>
<label  class='label'> payment_status </label>

<input type='text' class='form-control'  value='{$row_b["payment_status"]}'>
</div>
<div class='form-group'>
<label  class='label'> booking_status </label>

<input type='text' class='form-control'  value='{$row_b["booking_status"]}'>
</div>   
          </form>
        
        </div>
      </div>
      <div class='row justify-content-center'>
          <div class='col-md-12'>
              <div id='map' class='bg-white'></div>
          </div>
      </div>
    </div>
  </section>";
 }
 echo $output;
?>