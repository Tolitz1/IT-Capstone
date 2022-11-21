<?php
define('TITLE','Submit Request');
include('includes/header.php');
include('../dbConnection.php');
/* session_start();
    if($_SESSION['is_login']){
      $rEmail= $_SESSION ['rEmail'];
    }else{
      echo "<script>location.href='RequesterProfile.php';</script>";
    } */

    if(isset($_REQUEST['submitrequest'])){
      //checking for empty fields
      if(($_REQUEST['requestinfo']=="") ||($_REQUEST['requestdesc']=="") ||($_REQUEST['requestername']=="")
           ||($_REQUEST['requesteradd1']=="") ||($_REQUEST['requesteradd2']=="")||($_REQUEST['requestercity']=="")
           ||($_REQUEST['requesterstate']=="")||($_REQUEST['requesterzip']=="") ||($_REQUEST['requesteremail']=="")
           ||($_REQUEST['requestermobile']=="") ||($_REQUEST['requestdate']=="") ){
        $msg="<div class='alert alert-warning col-sm-6 ms-5 mt-3'>Fill All Fields</div>";
      }else{
        $rinfo = $_REQUEST['requestinfo'];
        $rdesk = $_REQUEST['requestdesc'];
        $rname = $_REQUEST['requestername'];
        $radd1 = $_REQUEST['requesteradd1'];
        $radd2 = $_REQUEST['requesteradd2'];
        $rcity = $_REQUEST['requestercity'];
        $rstate= $_REQUEST['requesterstate'];
        $rzip  = $_REQUEST['requesterzip'];
        $remail= $_REQUEST['requesteremail'];
        $rmobile = $_REQUEST['requestermobile'];
        $rdate = $_REQUEST['requestdate'];
        $sql = "INSERT INTO submitrequest_tb(request_info, request_desc, requester_name,requester_add1,
                  requester_add2, requester_city, requester_state, requester_zip, requester_email,
                  requester_mobile, request_date ) VALUES ('$rinfo', '$rdesk', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', 
                  '$rzip', '$remail', '$rmobile', '$rdate')";
        if($conn->query($sql)==TRUE){
          $genid = mysqli_insert_id($conn);
          $msg = "<div class = 'alert alert-success col-sm-6 ms-5 mt-2'>Request Submitted Sucessfully</div>";
          $_SESSION['myid'] = $genid;
          echo "<script>location.href='submitrequestsuccess.php';</script>";

        }else{
          $msg = "<div class = 'alert alert-danger col-sm-6 ms-5 mt-2'>Unable to Submit your request</div>";
        }
      }
    }
?>
    <div class="col-sm-7 col-md-8  ms-5" style="border: 2px solid black; padding:15px;" ><!----Start Service Request Form 2nd Column------>
      <form class="mx-5" action="" method="POST" class="mx-3">

      <h3 class="mb-3"> Request Appointment</h3>
        <div class="form-group mb-2">
          <label for="inputRequestInfo">Request Info</label>
          <input type="text" class="form-control" id="inputRequesterInfo" placeholder="Request Info" name="requestinfo">
    </div>
    <div class="form-group mb-2">
        <label for="inputRequestDescription">Description</label>
        <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description of the Service" name="requestdesc">
    </div>
    <div class="form-group mb-2">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" placeholder=" Full Name" name="requestername">
    </div>
    <div class="row">
      <div class="form-group col-md-3 mb-2">
        <label for="inputAddress">Address Line 1</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Street/ Sitio" name="requesteradd1">
      </div>
      <div class="form-group col-md-6 mb-2">
        <label for="inputAddress">Address Line 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Barangay" name="requesteradd2">
      </div>
     </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity"  name="requestercity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState"  name="requesterstate">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip"  name="requesterzip" onkeypress="isInputNumber(event)">
      </div>
    </div>  
    <div class="row">
      <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
        <input type="text" class="form-control" id="inputEmail"  name="requesteremail">
      </div>
      <div class="form-group col-md-3">
      <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="inputMobile"  name="requestermobile" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-3">
      <label for="inputEmail">Date</label>
        <input type="date" class="form-control" id="inputDate"  name="requestdate">
      </div>
      </div>
      <button type="submit" class="btn btn-dark mt-3" name="submitrequest">Submit</button>
      <button type="reset" class="btn btn-secondary mt-3">Reset</button>
      </form>
      <?php if(isset($msg)){echo $msg;}?>
    </div><!----End Service Request Form 2nd Column------>

    <!----Only Number for Input Fields------>
    <script>
      function isInputNumber(evt){
        var ch= String.formCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
          evt.preventDefault();
        }
      }
    </script>

<?php
include('includes/footer.php');
?>
