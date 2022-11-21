<?php

  define('TITLE','Requester Profile');
  session_start();
  include('includes/header.php');
  include('../dbConnection.php');
  
  
    /* if($_SESSION['is_login']){ */
      $rEmail= $_SESSION ['r_email'];
   /*  }else{
      echo "<script>location.href='RequesterProfile.php';</script>";
    } */
    $sql="SELECT r_email, r_fname, r_lname, r_gender, r_number, r_birthday, r_municipality FROM requesterlogin_tb WHERE r_email='$rEmail'";
    $result =$conn->query($sql);
    if($result->num_rows==1){
      $row = $result->fetch_assoc();
      $rFname = $row['r_fname'];
      $rLname = $row['r_lname'];
      $rGender = $row['r_gender'];
      $rNumber = $row['r_number'];
      $rBirthday = $row['r_birthday'];
      $rMunicipality = $row['r_municipality'];
    }

    if(isset($_REQUEST['nameupdate'])){
        if($_REQUEST['rFname']=="") {
            $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
        }else{
          $rFname = $_REQUEST['rFname'];
          $rLname = $_REQUEST['rLname'];
          $rGender = $_REQUEST['rGender'];
          $rNumber = $_REQUEST['rNumber'];
          $rBirthday = $_REQUEST['rBirthday'];
          $rMunicipality = $_REQUEST['rMunicipality'];
          $sql = "UPDATE requesterlogin_tb SET r_fname ='$rFname', r_lname ='$rLname' , r_number ='$rNumber', r_birthday ='$rBirthday', r_gender='$rGender' , r_municipality ='$rMunicipality' WHERE r_email='$rEmail'";
          if($conn->query($sql)==TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successefully </div>';
          }else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert>Unable to Update </div>'; 
          }
        }
    }

?>

      <div class="col-sm-6  ms-5" style="border: 2px solid black; padding:15px; background-color:white;"> <!--------- Start Profile Area 2nd Column--------->
        <form action="" method="POST" class="mx-3">

        <h3 class="mb-3"> Personal Information</h3>
          <div class="form-group">
            <label for="rEmail">Email</label><input type="Email" class="form-control" name="rEmail" id="rEmail" value="<?php echo $rEmail ?>" readonly>
          </div>

          <div class="row">
          <div class="form-group col-md-6 mt-3">
            <label for="rFname">First Name</label><input type="text" class="form-control" name="rFname" id="rFname" value="<?php echo $rFname ?>">
          </div>
          <div class="form-group col-md-6 mt-3">
            <label for="rLname">Last Name</label><input type="text" class="form-control" name="rLname" id="rLname" value="<?php echo $rLname ?>">
          </div>
          </div>

          <div class="row">
          <div class="form-group col-md-6 mt-3">
            <label for="rNumber">Phone Number</label><input type="Name" class="form-control" name="rNumber" id="rNumber" value="<?php echo $rNumber ?>">
          </div>
          <div class="form-group col-md-6 mt-3">
            <label for="rBirthday">Birthday</label><input type="date" class="form-control" name="rBirthday" id="rBirthday" value="<?php echo $rBirthday ?>" readonly>
          </div>
          </div>

          <div class="row">
          <div class="form-group col-md-6 mt-3">
            <label for="rGender">Gender</label><input type="Name" class="form-control" name="rGender" id="rGender" value="<?php echo $rGender ?>" readonly >          
          </div>
  
          <div class="form-group col-md-6 mt-3">
            <label for="rMunicipality">Municipality</label><input type="Name" class="form-control" name="rMunicipality" id="rMunicipality" value="<?php echo $rMunicipality ?>" readonly>          
          </div>
          </div>

          <button type="submit" class="btn btn-dark mt-3" name="nameupdate">Update</button>
          <?php if(isset($passmsg)){echo  $passmsg;} ?>


        </form>
      </div> <!--------- End Profile Area 2nd Column--------->
<?php
include('includes/footer.php');
?>