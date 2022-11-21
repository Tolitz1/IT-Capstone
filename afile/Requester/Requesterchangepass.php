<?php
session_start();
define('TITLE', 'Change Password');
include('includes/header.php');
include('../dbConnection.php');

   /*  if($_SESSION['is_login']){
      $rEmail= $_SESSION ['rEmail'];
    }else{
      echo "<script>location.href='RequesterProfile.php';</script>";
    } */
    $rEmail= $_SESSION ['r_email'];
    if(isset($_REQUEST['passupdate'])){
      if($_REQUEST['rPassword']== ""){
          $passmsg = '<div class = "alert alert-warning col-sm-6  mt-4">Fill All the Fields</div>';
      }else{
        $rPass = $_REQUEST ['rPassword'];
        $sql = "UPDATE requesterlogin_tb SET r_password = '$rPass' WHERE r_email = '$rEmail'";
         if($conn->query($sql)==TRUE){
           $passmsg = '<div class = "alert alert-success col-sm-6  mt-4">Successfully Updated </div>';
       }else{
           $passmsg = '<div class = "alert alert-danger col-sm-6  mt-4">Unable to Update</div>';
       }
      }
    }
?>
<div class="col-sm-7 col-md-9"> <!----- Start user change password form 2nd column-------->
  <form class="mt-3 mx-5" action="" method="POST">
    <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail;?>" readonly>
    </div>
    <div class="form-group">
    <label for="inputnewpassword">New Password</label>
    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
    </div>
    <button type="submit" class="btn btn-dark ms-2-4 mt-4 " name="passupdate">Update</button>
    <button type="reset" class="btn btn-secondary mt-4 " name="passupdate">Reset</button>

    <?php if(isset($passmsg)){echo $passmsg;}?>

  </form>
</div><!----- End user change password form 2nd column-------->

<?php
include('includes/footer.php');
?>

