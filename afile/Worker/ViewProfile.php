<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!------Bootstrap-------->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

<!------Custom CSS-------->
<link rel="stylesheet" href="../css/custom.css">

<!------Style CSS-------->
<link rel="stylesheet" href="../css/responsive.css">

<link rel="stylesheet" href="../css/styles.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
      body{
      background-image: url(Images/H8.jpg);
      background-repeat: no-repeat;
    background-size: cover;
    }
   .btn1{
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: #212733;
        color: #E6DDDE;
        border-radius: 4px;
        font-weight: bold;
        margin-left: 120px ;
        margin-top: 20px;
      }
      .btn1:hover{
        background: #E6DDDE;
        border: 1px solid;
        color: #212733;
      }
      .w_info{
        left: 0;
        margin-top: 1px;
        position: relative;
      }
      .pinfo{
        text-align:left;
        font-size: smaller;
      }
      .services{
        text-align:left;
        color: black;
        margin-left: 0;
      }
      .form-select{
        width: 50%;
        border: 1px solid black;
      }
      .method{
        left: 50px;
        border: 1px solid lightgrey;
        border-radius: 5px;
        width: 80%;
      }
      .btn2{
        border: none;
        outline: none;
        height: 50px;
        width: 20%;
        background-color: #212733;
        color: #E6DDDE;
        border-radius: 4px;
        font-weight: bold;
        margin-left: 315px ;
        margin-top: 5px;
      }
      .btn2:hover{
        background-color: gray;
        border: 1px solid #212733 ;
 
      }
      a{
        color: white;
        text-decoration: none;
      }
      a:hover{
        color: white;
        text-decoration: none;
      }
      .btn{
        border: none;
        outline: none;
        height: 50px;
        width: 40%;
        background-color: #212733;
        color: #E6DDDE;
        border-radius: 4px;
        font-weight: bold;
        margin-left: 70px;
        margin-top: 5px;
      }
      .btn:hover{
        background-color: gray;
      }





    
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}
      
</style>

<title>Handyman Workers</title>
</head>
<body>


<?php
    include('../dbConnection.php');
    session_start();
/* HEREEEEEEEEEEEEEEEEEEE */
?>  
    <?php
       if(isset($_REQUEST['view'])){
/* CAPPOINTMENT */ /* Ronnel */ /* Daniel */                                                                      /* Customer Name */ /* Aldrin */
       $sql = "SELECT * FROM workerslogin_tb CROSS JOIN requesterlogin_tb WHERE w_login_id = {$_REQUEST['id']} && r_fname = 'Alvin'";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();
       }

    ?>

<div class="pos col-sm-6  ms-5" style="border: 2px solid black; padding:15px; margin-top:50px; left: 320px; position:relative;right:100px;background-color:white;"> <!--------- Start Profile Area 2nd Column--------->
        <form action="" method="POST" class="mx-3">
        <h6>Worker Details</h6>
          <p class="details mb-0">Email: <?php if(isset($row['w_email'])) {echo $row['w_email']; }?></p>
          <p class="details mb-0">Name: <?php if(isset($row['w_fname'])) {echo $row['w_fname']; }?>
              <?php if(isset($row['w_lname'])) {echo $row['w_lname']; }?></p>
          <p class="details mb-0">Phone Number: <?php if(isset($row['w_number'])) {echo $row['w_number']; }?></p>



          <div class="row">
              <div class=" form-group col-md-6" >
            <!--   <label for="name">Name:</label> -->
             <!-- text -->
              <input type="hidden" class="form-control" name="rName" id="rName"  value="<?php if(isset($row['r_fname'])) {echo $row['r_fname']; }?>" readonly>
              </div>

              <div class="form-group col-md-6" >
           <!--    <label for="address">Address:</label> -->
            <input type="hidden" class="form-control" name="rAddress" id="rAddress" value="<?php if(isset($row['r_municipality'])) {echo $row['r_municipality']; }?>"readonly>
              </div>
              </div>

              <div class="row">
              <div class=" form-group col-md-6" >
           <!--    <label for="email">Email:</label> -->
            <input type="hidden" class="form-control" name="rEmail" id="rEmail" value="<?php if(isset($row['r_email'])) {echo $row['r_email']; }?>"readonly>
             
              </div>

              <div class="form-group col-md-6" >
             <!--  <label for="number">number:</label> -->
             <input type="hidden" class="form-control" name="rNumber" id="rNumber" value="<?php if(isset($row['r_number'])) {echo $row['r_number']; }?>"readonly>
              </div>
              </div>
  
          </div> 

         </div> 






          <div class="pos col-sm-6  ms-5" style="border: 2px solid black; padding:15px; margin-top:10px; margin-bottom:30px;left: 320px; position:relative;right:100px;background-color:white;">
          <h3 class="mb-3">Book Appointment</h3>
          <p class="pinfo"  style="left: 0; margin-bottom:2px;"><h6> <p>Kindly check the button to confirm the worker. <input type="checkbox" name="checkbox"  value=<?php if(isset($row['w_email']))  {echo $row['w_email']; }?>></h6></p></p>
          <div class="row">
                      <table class="table table-striped table-hover table-bordered" id="service-list">
                      <colgroup>                           
                            <col width="45%">
                            <col width="45%">
                            </colgroup>

                            <thead>
                                <tr>                                   
                                    <th class=" px-1 py-1">Service</th>
                                    <th class=" px-1 py-1">Cost</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="text-center">
                                      <td class="text-center px-1 py-1">             
                                          <p class="pinfo"  style="left: 0; margin-bottom:2px; color:black;"> <?php if(isset($row['w_haircut'])) {echo $row['w_haircut']; }?> </p>                                            
                                      </td>

                                      <td>
                                      <p class="pinfo"  style= "left: 0; margin-bottom:2px; " ><?php if(isset($row['w_haircutprice']))  {echo $row['w_haircutprice']; }?>                                                    
                                        <input type="hidden" name="num1" id="num1" value="0">
                                        <input style="width:20%;margin-left: 20px;" type="checkbox" name="num1" id="num1" value="<?php if(isset($row['w_haircutprice'])) {echo $row['w_haircutprice'];/*  echo' '; echo $row['w_haircut']; */ } ?>" onclick="UpdateCost(this);">
                                        <input type="hidden" name="num1aa" id="num1aa" value="None">
                                        <input type="hidden" name="num1a" id="num1a" value="<?php if(isset($row['w_haircut'])) {echo $row['w_haircut']; }?>">
                                      </p>
                                      </td>
                                </tr>

                                <tr class="text-center">
                                    <td class="text-center px-1 py-1">   
                                      <p class="pinfo"  style="left: 0; margin-bottom:2px; color:black;"> <?php if(isset($row['w_haircolor'])) {echo $row['w_haircolor']; }?> </p>
                                    </td>
                                    
                                    <td>
                                      <p class="pinfo"  style="left: 0; margin-bottom:2px; " ><?php if(isset($row['w_hair_color_price']))   {echo $row['w_hair_color_price']; }?>
                                        <input type="hidden" name="num2" id="num2" value="0">
                                        <input style="width:20%;margin-left: 20px;" type="checkbox" name="num2" id="num2"  value="<?php if(isset($row['w_hair_color_price'])) {echo $row['w_hair_color_price']; /* echo' '; echo $row['w_haircolor']; */ }?>" onclick="UpdateCost(this);">
                                        <input type="hidden" name="num2bb" id="num2bb" value="None">
                                        <input type="hidden" name="num2b" id="num2b" value="<?php if(isset($row['w_haircolor'])) {echo $row['w_haircolor']; }?>">
                                      </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                      <p class="pinfo"  style="left: 0; margin-bottom:2px; color:black;"> <?php if(isset($row['w_manicure'])) {echo $row['w_manicure']; }?> </p>
                                    </td>

                                    <td>
                                      <p class="pinfo"  style="left: 0; margin-bottom:2px; " ><?php if(isset($row['w_manicure_price']))  {echo $row['w_manicure_price']; }?>
                                      <input type="hidden" name="num3" id="num3" value="0">
                                      <input style="width:20%; margin-left: 20px;" type="checkbox" name="num3" id="num3"  value="<?php if(isset($row['w_manicure_price'])) {echo $row['w_manicure_price']; /* echo' '; echo $row['w_manicure']; */ }?>" onclick="UpdateCost(this);">
                                      <input type="hidden" name="num3cc" id="num3cc" value="None">
                                      <input type="hidden" name="num3c" id="num3c" value="<?php if(isset($row['w_manicure'])) {echo $row['w_manicure']; }?>">
                                      </p>
                                    </td>
                                </tr>    
                                
                                <tr>
                                    <td>
                                    <p class="pinfo"  style="left: 0; margin-bottom:2px; color:black;"> <?php if(isset($row['w_pedicure'])) {echo $row['w_pedicure']; }?> </p>
                                    </td>

                                    <td>
                                    <p class="pinfo"  style="left: 0; margin-bottom:2px; " ><?php if(isset($row['w_pedicure_price']))  {echo $row['w_pedicure_price']; }?>
                                    <input type="hidden" name="num4" id="num4" value="0">
                                    <input style="width:20%; margin-left: 20px;" type="checkbox" name="num4" id="num4"  value="<?php if(isset($row['w_pedicure_price'])) {echo $row['w_pedicure_price']; /* echo' '; echo $row['w_pedicure']; */  }?>" onclick="UpdateCost(this);">
                                    <input type="hidden" name="num4dd" id="num4dd" value="None">
                                    <input type="hidden" name="num4d" id="num4d" value="<?php if(isset($row['w_pedicure'])) {echo $row['w_pedicure']; }?>">
                                    </p>
                                    </td>
                                </tr>

                                <tr>
                                  <td>
                                    <p class="pinfo"  style="left: 0; margin-bottom:2px; color:black;"> <?php if(isset($row['w_makeup'])) {echo $row['w_makeup']; }?> </p>
                                  </td>

                                  <td>
                                    <p class="pinfo"  style="left: 0; margin-bottom:2px; " > <?php if(isset($row['w_make_up_price']))  {echo $row['w_make_up_price']; }?>
                                    <input type="hidden" name="num5" id="num5" value="0">
                                    <input style="width:20%; margin-left: 20px;" type="checkbox" name="num5" id="num5" value="<?php if(isset($row['w_make_up_price'])) {echo $row['w_make_up_price']; /* echo' '; echo $row['w_makeup']; */}?>" onclick="UpdateCost(this);">
                                    <input type="hidden" name="num5ee" id="num5ee" value="None">
                                    <input type="hidden" name="num5e" id="num5e" value="<?php if(isset($row['w_makeup'])) {echo $row['w_makeup']; }?>">
                                    </p>
                                  </td>
                                </tr>


                            </tbody>
                      </table>
                  </div>


              <div class="row">
              <div class="form-group col-md-6">
             <!--  <label > Mode of Payment</label> -->
              </div>

              <div class="form-group col-md-6" >
                  <input type="hidden" value="Full Payment" name="req_radio">
              
              <!-- <select name="req_radio" style="margin-left: 13%;" value="<?php echo $req_radio ?>">
                        <option value="Partial Payment">Partial Payment</option>
                        <option value="Full Payment">Full Payment</option>    
                    </select> -->
              </div>
              </div>



              <div class="row">
              <div class="form-group col-md-6 mb-2">
              <!-- <label for="tf"> Transaction Fee</label> -->
              <label>Total Cost</label>
              </div>

              <div class="form-group col-md-6 mb-2">
              <!-- <label for="tf" style="margin-left: 60px;"> 2%</label> -->
              <input type="text" id="total" disabled="disabled"/>
              </div>
              </div>

             
              

              <div class="row">
              <div class=" form-group col-md-6" >
              <label class="inputMethod">Method of contact</label>
                <select class="method form-select" aria-label="Method" name="requestermethod" required>
                  <option Selected>Method</option>
                  <option value="Phone">Phone call</option>
                  <option value="Email">Email</option>
                </select>
              </div>

              <div class="form-group col-md-6" >
              <label for="inputEmail">Appointment Date</label>
                <input type="datetime-local" class="form-control" id="inputDate"  name="requesterdate" style="width: 80%;" required>
              </div>
              </div>
              
        
              <div class="form-group">
              <label class="mt-3">Message: </label>
              <textarea class="form-control" name="requestermessage" placeholder="How can we help you?" style="height: 60px;" ></textarea>
              </div>
              

              <br>
              <div class="form-group ">
              <em style="font-size:15px;">Kindly insert one (1) picture related to the service you want to aqcuire.The accepted picture formats are jpg, jpeg and png.</em><br>
              <label class="mt-1">Picture: </label>
              <input type="file" name="requesterpic">
              </div>

              <div class="form-group">
              
              <input type="hidden" name="num5e" id="num5e" value="<?php if(isset($row['w_makeup'])) {echo $row['w_makeup']; }?>">
                                    
              </div>

              <div class="row">
              <div class="form-group mb-2 col-md-6 mt-4">
              <button type="submit" name="cancel" id="c-btn" class="btn" data-dismiss="modal"&times;> <a href="#"></a> Cancel</button>
              </div>


                 <?php if(isset($row
                  ['req_id'])) echo $row['req_id']; ?>
              <div class="form-group mb-2 col-md-6  mt-4">
              <button type="submit" name="submit" href="WorkersProfile.php" value="view" id="c-btn" class="btn left:10px;"data-bs-toggle="modal" data-bs-target="#Modal">Submit </button>
              </div>
            </div>

            </div>

            

            ?>
            




<div class="container" id="Modal">
  <div class="modal fade" id="s">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       <!--- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Salon Services</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form>
        <!-- Modal body -->
        <div class="modal-body">
              <div class="col-lg-6"></div>
              This will be your total payment.
      <p><?php if(isset($row['s_result'])) {echo $row['s_result']; }?></p>

      <label>Kindly patiently wait for the workers approval of your requester appointment.</label>
            
        </div>
        </form>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" id="c-btn" class="btn btn-secondary" data-dismiss="modal"&times;>Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>




  <script>
  var total=0;
function UpdateCost(elem) {
 
    if (elem.checked == true) { 
		total += Number(elem.value); 
	}else{
		total -=Number(elem.value);
	}
 
	document.getElementById('total').value =total.toFixed(0);
}
</script>




<?php
include('../dbConnection.php');

    if(isset($_POST['submit'])){
   
        $checkbox = $_POST ['checkbox'];
       
        $requestermethod = $_POST['requestermethod'];
        $req_radio = $_POST['req_radio'];
        $requesterdate= $_POST['requesterdate'];
        $requestermessage= $_POST['requestermessage'];
        $requesterpic  = $_POST['requesterpic'];

        $requestername = $_POST['rName'];
        $requesteradd = $_POST['rAddress'];
        $requesteremail = $_POST['rEmail'];
        $requesternumber = $_POST['rNumber'];


      /*   $service1 = $_POST['num1'];
        $service2 = $_POST['num2'];
        $service3 = $_POST['num3'];
        $service4 = $_POST['num4'];
        $service5 = $_POST['num5']; */

        /* $service1 = $_POST['num1a']; */
       /*  $service2 = $_POST['num2b']; */
       /*  $service3 = $_POST['num3c']; */
        /* $service4 = $_POST['num4d']; */
       /*  $service5 = $_POST['num5e']; */


        if($a = $_POST ['num1']){
          $service1 = $_POST['num1a'];
        }else{
          $service1 = $_POST['num1aa'];
        }

       if( $b = $_POST ['num2']){
        $service2 = $_POST['num2b'];
       }else{
        $service2 = $_POST['num2bb'];
      }

       if( $c = $_POST ['num3']){
        $service3 = $_POST['num3c'];
       }else{
        $service3 = $_POST['num3cc'];
      }

        if($d = $_POST ['num4']){
          $service4 = $_POST['num4d'];
        }else{
          $service4 = $_POST['num4dd'];
        }

       if( $e = $_POST ['num5']){
        $service5 = $_POST['num5e'];
       }else{
        $service5 = $_POST['num5ee'];
      }

        $req_radio =$_POST['req_radio'];



        
   /*      $two =2;
        $tf =0.02; */




  /*       if( $req_radio == 'Partial Payment'){  
          if(isset($_POST['submit'])){
              $sum =  $a + $b; 
              $sum1 = $sum+ $c;
              $sum2 = $sum1 + $d;
              $sum3 = $sum2 + $e;
              $div = $sum3 / $two;
              $sabresult = $div * $tf;
              $s_result = $div + $sabresult;  
    
    
          }
      } */
    
      if( $req_radio == 'Full Payment'){
          if(isset($_POST['submit'])){
              $sum =  $a + $b; 
              $sum1 = $sum + $c;
              $sum2 = $sum1 + $d;
              $sum3 = $sum2 + $e;
            /*   $sabresult = $sum3 * $tf; */
              $s_result = $sum3;
    
          }
      }
   

      $query = "INSERT INTO srequest_tb  (worker_id, req_method, req_radio, req_name, req_add, req_email, req_mobile, req_msg, req_date, req_pic, s_result, req_service1, req_service2, req_service3, req_service4, req_service5) VALUES
      ('$checkbox', '$requestermethod', '$req_radio', '$requestername', '$requesteradd', '$requesteremail', '$requesternumber', '$requestermessage', '$requesterdate','$requesterpic','$s_result','$service1','$service2','$service3','$service4','$service5' )";
      $query_run = mysqli_query($conn, $query);
      if($query_run){
     
      
          echo '<script> alert ("Data Saved")</script>';
          $yourURL="../Requester/RequesterProfile.php";
          echo ("<script>location.href='$yourURL'</script>");
        
        }else{
      
         echo '<script> alert ("Data Not Saved")</script>';
         $yourURL="../Requester/RequesterProfile.php";
         echo ("<script>location.href='$yourURL'</script>");
        }     
      }         
      
    
  
?>


  
               
        



<!-- JavaScript-->
<script src="JS/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
</body>
</html>
