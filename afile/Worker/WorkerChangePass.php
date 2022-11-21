<?php
session_start();
define('TITLE', 'Change Password');
include('include/headers.php');
include('../dbConnection.php');

   /*  if($_SESSION['is_login']){
      $wEmail= $_SESSION ['wEmail'];
    }else{
      echo "<script>location.href='WorkersProfile.php';</script>";
    } */
    $wEmail= $_SESSION ['w_email'];
    if(isset($_REQUEST['passupdate'])){
      if($_REQUEST['wPassword']== ""){
          $passmsg = '<div class = "alert alert-warning col-sm-6  mt-4">Fill All the Fields</div>';
      }else{
        $wPass = $_REQUEST ['wPassword'];
        $sql = "UPDATE workerslogin_tb SET w_password = '$wPass' WHERE w_email = '$wEmail'";
         if($conn->query($sql)==TRUE){
           $passmsg = '<div class = "alert alert-success col-sm-6  mt-4">Successfully Updated </div>';
       }else{
           $passmsg = '<div class = "alert alert-danger col-sm-6  mt-4">Unable to Update</div>';
       }
      }
    }
?>
<div class="col-sm-7 col-md-9" style="border: 2px solid black;background-color:white; left:10%" >
<p class="bg-dark text-white p-3 text-center; mt-3" style="border-radius: 2px; font-size:20px; width:100%"> Change Password</p> <!----- Start user change password form 2nd column-------->
  <form class="mt-3 mx-5" action="" method="POST">
    <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" value="<?php echo $wEmail;?>" readonly>
    </div>
    <div class="form-group">
    <label for="inputnewpassword">New Password</label>
    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="wPassword">
    </div>
    <button type="submit" class="btn btn-dark ms-2-4 mt-4 " name="passupdate">Update</button>
    <button type="reset" class="btn btn-secondary mt-4 " name="passupdate">Reset</button>

    <?php if(isset($passmsg)){echo $passmsg;}?>

  </form>
</div><!----- End user change password form 2nd column-------->


<?php include('include/footers.php')?>