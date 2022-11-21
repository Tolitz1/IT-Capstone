
<style>
input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}
  </style>
<?php
define('TITLE', 'Personal Information');
session_start();
include('include/headers.php');
include('../dbConnection.php');



    /* if($_SESSION['is_login']){ */
      $wEmail= $_SESSION ['w_email'];
 /*    }else{
      echo "<script>location.href='WorkerPersonalInfo.php';</script>";
    } */
    $sql="SELECT w_email, w_fname, w_lname, w_gender, w_number, w_municipality, w_role, w_file, w_haircutprice,w_hair_color_price,
    w_manicure_price, w_pedicure_price, w_make_up_price,w_haircut,w_haircolor,w_manicure,w_pedicure,w_makeup
     FROM workerslogin_tb WHERE w_email='$wEmail'";
    $result =$conn->query($sql);
    if($result->num_rows==1 ){
      $row = $result->fetch_assoc();
      $wFname = $row['w_fname'];
      $wLname = $row['w_lname'];
      $wGender = $row['w_gender'];
      $wNumber = $row['w_number'];
    /*   $wBirthday = $row['w_birthday']; */
      $wMunicipality = $row['w_municipality'];
      $wRole = $row['w_role'];
      /* $wFile = $row['w_file']; */

      $whaircut_price = $row['w_haircutprice'];
      $whair_color_price = $row['w_hair_color_price'];
      $wmanicure_price = $row['w_manicure_price'];
      $wpedicure_price = $row['w_pedicure_price'];
      $wmake_up_price = $row['w_make_up_price'];

      $w_haircut= $row['w_haircut'];
      $w_haircolor= $row['w_haircolor'];
      $w_manicure= $row['w_manicure'];
      $w_pedicure= $row['w_pedicure' ];
      $w_makeup= $row['w_makeup'];

  
    }
    if(isset($_REQUEST['nameupdate'])){
        if($_REQUEST['wFname']=="") {
            $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
        }else{
        
          $wFname = $_REQUEST['wFname'];
          $wLname = $_REQUEST['wLname'];
          $wGender = $_REQUEST['wGender'];
          $wNumber = $_REQUEST['wNumber'];
        /*   $wBirthday = $_REQUEST['wBirthday']; */
          $wMunicipality = $_REQUEST['wMunicipality'];
          $wRole = $_REQUEST['wRole'];
         /*  $wFile = $_REQUEST['wFile']; */

          $w_haircut = $_REQUEST['w_haircut'];
          $w_haircolor = $_REQUEST['w_haircolor'];
          $w_manicure = $_REQUEST['w_manicure'];
          $w_pedicure = $_REQUEST['w_pedicure'];
          $w_makeup = $_REQUEST['w_makeup'];
    
          $whaircut_price = $_REQUEST['whaircut_price'];
          $whair_color_price = $_REQUEST['whair_color_price'];  
          $wmanicure_price = $_REQUEST['wmanicure_price'];
          $wpedicure_price = $_REQUEST['wpedicure_price'];
          $wmake_up_price = $_REQUEST['wmake_up_price'];


          $sql = "UPDATE workerslogin_tb SET w_fname ='$wFname', w_lname ='$wLname' , w_number ='$wNumber', w_gender='$wGender' ,w_municipality ='$wMunicipality',w_role ='$wRole',
          w_haircutprice ='$whaircut_price', w_hair_color_price='$whair_color_price', w_manicure_price='$wmanicure_price', w_pedicure_price='$wpedicure_price', w_make_up_price='$wmake_up_price',
          w_haircut='$w_haircut', w_haircolor='$w_haircolor',w_manicure ='$w_manicure', w_pedicure='$w_pedicure', w_makeup='$w_makeup'  WHERE w_email='$wEmail'";
          if($conn->query($sql)==TRUE){ 
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successefully </div>';
          }else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert>Unable to Update </div>'; 
          }
        }
    }

   
?>

      <div class="col-sm-6  ms-5" style="position:absolute; left:18%; border: 2px solid black; background-color:white; padding:15px; margin-top:0;"> <!--------- Start Profile Area 2nd Column--------->
        <form action="" method="POST" class="mx-3">
 
        <h3 class="mb-3"> Personal Information</h3>
          <div class="form-group">
            <label for="wEmail">Email</label><input type="Email" class="form-control" name="wEmail" id="wEmail" value="<?php echo $wEmail ?>" readonly>
          </div>

          <div class="row">
          <div class="form-group col-md-6 mt-3">
            <label for="wFname">First Name</label><input type="Name" class="form-control" name="wFname" id="wFname" value="<?php echo $wFname ?>" readonly>
          </div>
          <div class="form-group col-md-6 mt-3">
            <label for="wFname">Last Name</label><input type="Name" class="form-control" name="wLname" id="wLname" value="<?php echo $wLname ?>" readonly>
          </div>
          </div>

          <div class="row">
          <div class="form-group col-md-6 mt-3">
            <label for="wNumber">Phone Number</label><input type="Name" class="form-control" name="wNumber" id="wNumber" value="<?php echo $wNumber ?>">
          </div>
          <div class="form-group col-md-6 mt-3">
          <label for="wRole">Role</label><input type="Name" class="form-control" name="wRole" id="wRole" value="<?php echo $wRole ?>" readonly>
           <!--  <label for="wBirthday">Birthday</label><input type="date" class="form-control" name="wBirthday" id="wBirthday" value="<?php echo $wBirthday ?>" readonly > -->
          </div>
          </div>

          <div class="row">
          <div class="form-group col-md-6 mt-3">
          <label for="wGender">Gender</label><input type="Name" class="form-control" name="wGender" id="wGender" value="<?php echo $wGender ?>"readonly  >
          </div>
  
          <div class="form-group col-md-6 mt-3">
          <label for="wMunicipality">Municipality</label><input type="Name" class="form-control" name="wMunicipality" id="wMunicipality" value="<?php echo $wMunicipality ?>" readonly>
          </div>
          </div>


          <div class="row">   
          <div class="form-group col-md-6 mt-3">
          <label for="wRole"></label><input type="hidden" class="form-control" name="wRole" id="wRole" value="<?php echo $wRole ?>" readonly>
          </div>

          

          <!-- <div class="form-group col-md-6 mt-3">
          <label for="wFile">File</label><input type="Name" class="form-control" name="wFile" id="wRole" value="<?php /* echo $wFile */ ?>"readonly>
          </div> -->

          <?php

if($wRole == 'Handyman Worker'){
    echo '
    <div class="col-md-9 mt-5 ">
                 
          <label for="w_haircut">
          <input type="hidden" id="w_haircut" name="w_haircut" value="None">
          <input  type="checkbox" id="w_haircut" name="w_haircut" value="Plumbing"> Plumbing</label>
          <input type="number" name="whaircut_price" id="whaircut_price" value="0" style="width: 40%; margin-left:100px;">
          <br>

          <label for="w_haircolor">
          <input type="hidden" id="w_haircolor" name="w_haircolor" value="None">
          <input type="checkbox" id="w_haircolor" name="w_haircolor" value="Carpentry">Carpentry</label>
          <input type="number" name="whair_color_price" id="whair_color_price" value="0" style="width: 40%; margin-left:100px;" >
          <br>

          <label for="w_manicure">
          <input type="hidden" id="w_manicure" name="w_manicure" value="None">
          <input type="checkbox" id="w_manicure" name="w_manicure" value="Painting">Painting</label>
          <input type="number" name="wmanicure_price" id="wmanicure_price" value="0" style="width: 40%;margin-left:113px;">
          <br>
          <label for="w_pedicure">
          <input type="hidden" id="w_pedicure" name="w_pedicure" value="None">
          <input type="checkbox" id="w_pedicure" name="w_pedicure" value="Electrical">Electrical</label>
          <input type="number" name="wpedicure_price" id="wpedicure_price" value="0" style="width: 40%;margin-left:105px; ">
          <br>
          <label for="w_makeup">
          <input type="hidden" id="w_makeup" name="w_makeup" value="None">
          <input type="checkbox" id="w_makeup" name="w_makeup" value="Maintenance & Repair">Maintenance & Repair</label>
          <input type="number" name="wmake_up_price" id="wmake_up_price" value="0" style="width: 40%; margin-left:16px;">
    
    </div>';
}else
 
 echo '
           
   <div class="col-md-9 mt-5 ">
           
   <label for="w_makeup" style="position:absolute; top:-20%; left:3%">
   <input type="hidden" id="w_makeup" name="w_makeup" value="None">
   <input type="checkbox" id="w_makeup" name="w_makeup" value="Massage Treatment"> Massage Treatment</label>

   <label for="w_haircut">
   <input type="hidden" id="w_haircut" name="w_haircut" value="None">
   <input  type="checkbox" id="w_haircut" name="w_haircut" value="Hair Treatment"> Hair Treatment</label>
   <input type="number" name="whaircut_price" id="whaircut_price" value="0" style="width: 20%; margin-left:44px;">
   <br>

   <label for="w_haircolor">
   <input type="hidden" id="w_haircolor" name="w_haircolor" value="None">
   <input type="checkbox" id="w_haircolor" name="w_haircolor" value="Nail Treatment"> Nail Treatment</label>
   <input type="number" name="whair_color_price" id="whair_color_price" value="0" style="width: 20%; margin-left:45px;" >
   <br>

   <label for="w_manicure">
   <input type="hidden" id="w_manicure" name="w_manicure" value="None">
   <input type="checkbox" id="w_manicure" name="w_manicure" value="SkinCare Services">SkinCare Services</label>
   <input type="number" name="wmanicure_price" id="wmanicure_price" value="0" style="width: 20%;margin-left:22px;">
   <br>
   <label for="w_pedicure">
   <input type="hidden" id="w_pedicure" name="w_pedicure" value="None">
   <input type="checkbox" id="w_pedicure" name="w_pedicure" value="Make Up Services">Make Up Services</label>
   <input type="number" name="wpedicure_price" id="wpedicure_price" value="0" style="width: 20%;margin-left:25px; ">

    
   <input type="number" name="wmake_up_price" id="wmake_up_price" value="0" style="width: 20%;margin-left:11px; position:relative; bottom:100%; left:-105px ">
   
   </div>  
 ';
  ?>

        
          <button type="submit" class="btn btn-dark mt-3" name="nameupdate">Update</button>
          <?php if(isset($passmsg)){echo  $passmsg;} ?>
          </div>

          </form>

        
      </div> <!--------- End Profile Area 2nd Column--------->
  <div class="col-sm-3  ms-5" style="position:absolute; left:70%; border: 2px solid black; background-color:white; padding:15px; margin-top:0;">
      
  <h3 class="mb-3"> Services</h3>
  <div class="row">
          <div class="form-group col-md-3 mt-3">
          <input type="Name" class="form-control" name="whaircut_price" id="whaircut_price" value="<?php echo $whaircut_price ?>"readonly  >
          </div>
  
          <div class="form-group col-md-7 mt-3">
            <input type="Name" class="form-control" name="w_haircut" id="w_haircut" value="<?php echo $w_haircut ?>" readonly>
          </div>
  </div>


  <div class="row">
          <div class="form-group col-md-3 mt-3">
          <input type="Name" class="form-control" name="whair_color_price" id="whair_color_price" value="<?php echo $whair_color_price ?>"readonly  >
          </div>
  
          <div class="form-group col-md-7 mt-3">
            <input type="Name" class="form-control" name="w_haircolor" id="w_haircolor" value="<?php echo $w_haircolor ?>" readonly>
          </div>
  </div>

  <div class="row">
          <div class="form-group col-md-3 mt-3">
          <input type="Name" class="form-control" name="wmanicure_price" id="wmanicure_price" value="<?php echo $wmanicure_price ?>"readonly  >
          </div>
  
          <div class="form-group col-md-7 mt-3">
            <input type="Name" class="form-control" name="w_manicure" id="w_manicure" value="<?php echo $w_manicure ?>" readonly>
          </div>
  </div>

  <div class="row">
          <div class="form-group col-md-3 mt-3">
          <input type="Name" class="form-control" name="wpedicure_price" id="wpedicure_price" value="<?php echo $wpedicure_price ?>"readonly  >
          </div>
  
          <div class="form-group col-md-7 mt-3">
            <input type="Name" class="form-control" name="w_pedicure" id="w_pedicure" value="<?php echo $w_pedicure ?>" readonly>
          </div>
  </div>

  <div class="row">
          <div class="form-group col-md-3 mt-3">
          <input type="Name" class="form-control" name="wmake_up_price" id="wmake_up_price" value="<?php echo $wmake_up_price ?>"readonly  >
          </div>
  
          <div class="form-group col-md-7 mt-3">
            <input type="Name" class="form-control" name="w_makeup" id="w_makeup" value="<?php echo $w_makeup ?>" readonly>
          </div>
  </div>
  </div>

 <!--  <div class="col-sm-3  ms-5" style="position:absolute; left:70%; border: 2px solid black; background-color:white; padding:15px; margin-top:400px;">
<h3>Payment Method</h3>
<p>0915-160-6219</p>
<p>Admin: Alvin S.</p>
  </div>
        -->


      
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
</script>


<!-- COntainer Border box -->



<!-- Price input -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

<?php include('include/footers.php')?>