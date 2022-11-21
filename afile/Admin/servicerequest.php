<?php
define('TITLE','Service Requests');
session_start();
include('includess/head.php');
include('../dbConnection.php');

if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
}else{
  echo"<script> location.href='servicerequest.php'</script>";
}
?>
<!-- Start 2nd Column -->


<div class="col-sm-4 mb-5" style="position:absolute; left:18%;" >
    <?php
     $sql = "SELECT *FROM srequest_tb  ORDER BY req_date ASC";
     $result = $conn->query($sql);
     if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){

         /* $wFname = $row['w_fname']; */

         echo '<div class="card mb-3 mx-3">';
          echo '<div class="card-header">';
           echo 'Customer Name:'.  $row['req_name']; 
         echo '</div>';
          echo '<div class="card-body">';
           echo '<h5 class="card-title">Request info:'.$row
           ['worker_id'];
           echo'</h5>';
           echo '<p class="card-text">'.$row['req_msg'];
           echo '</p>';
           echo '<p class="card-text">'.$row['req_add'];
           echo '</p>';
           echo '<p class="card-text">Request Date: '.$row
           ['req_date'];
           echo '</p>';

           echo '<div class="d-grid gap-2 d-md-flex justify-content-md-end">';
           
       echo'<form action="" method="POST">';
       echo'<input type="hidden" name="id" value=' .$row["req_id"].'>';
        echo '<input type="submit" class="btn btn-danger me-md-2"
          value="View" name="view">';
       echo '<input type="submit" class="btn btn-secondary"
          value="Close" name="close">';
           
     echo'</div>';
   echo '</div>';
   echo '</div>';
   echo'</form>';
  }
 }
    ?>
</div><!--  End 2nd Column -->


<?php
if(isset($_REQUEST['view'])){
$sql = "SELECT * FROM srequest_tb WHERE req_id = 
{$_REQUEST['id']}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
}
if(isset($_REQUEST['close'])){
    $sql = "DELETE FROM srequest_tb WHERE req_id =
    {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content= "0;URL=?closed" /
        >';
    }else{
        echo "Unable to Delete";
    }
}

?>

<div class="col-sm-9  ms-5" style="position:absolute; left:48%; border: 2px solid black; background-color:white; padding:15px; width:40%;"> <!-- Start Assigned Work 3rd Column -->
<form action="" method="POST">

<h5 class="text-center mt-3">View Work Order Request</h5>


<div class="row">
<div class="form-group col-md-6">
<label for="workerid">Worker ID</label>
    <input type="text" class="form-control"
    id="workerid" name="workerid" value="<?php if(isset($row
    ['worker_id'])) echo $row['worker_id']; ?>"readonly>
</div>




<div class="form-group col-md-6">
   <!-- <label for="reqeusterid">Request ID</label> -->
   <input type="hidden" class="form-control"
    id="reqeusterid" name="reqeusterid" value="<?php if(isset($row
    ['req_id'])) echo $row['req_id']; ?>" readonly>
</div>
</div>



<div class="form-group">
    <label for="requestermsg">Message</label>
    <input type="text" class="form-control" id="requestermsg"
    name="requestermsg" value="<?php if(isset($row
    ['req_msg'])) echo $row['req_msg']; ?>"readonly>
</div>

<div class="form-group">
    <label for="requestername">Name</label>
    <input type="text" class="form-control"
    id="requestername" name="requestername" value="<?php if(isset($row
    ['req_name'])) echo $row['req_name']; ?>"readonly>
</div>

<div class="row">
    <div class="form-group col-md-6">
            <label for="requesteradd">Address</label>
            <input type="text" class="form-control" id="requesteradd"
            name="requesteradd" value="<?php if(isset($row
        ['req_add'])) echo $row['req_add']; ?>"readonly>
    </div>
    
    <div class="form-group col-md-6">
        <label for="requesteremail ">Email</label>
        <input type="email" class="form-control"
        id="requesteremail" name="requesteremail" value="<?php if(isset($row
        ['req_email'])) echo $row['req_email']; ?>"readonly>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="requesterradio">Payment</label>
        <input type="text" class="form-control"
        id="requesterradio" name="requesterradio" value="<?php if(isset($row
    ['req_radio'])) echo $row['req_radio']; ?>"readonly>
    </div>

    <div class="form-group col-md-6">
        <label for="requestermethod">Method</label>
        <input type="text" class="form-control"
        id="requestermethod" name="requestermethod"
        onekeypress="isInputNumber(event)" value="<?php if(isset($row
        ['req_method'])) echo $row['req_method']; ?>"readonly>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="requestermobile">Mobile</label>
        <input type="text" class="form-control"
        id="requestermobile" name="requestermobile"
        onekeypress="isInputNumber(event)" value="<?php if(isset($row
        ['req_mobile'])) echo $row['req_mobile']; ?>" onkeypress="isInputNumber(event)"readonly>
    </div>
<div class="form-group col-md-6">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate"
        name="requesterdate" onekeypress="isInputNumber(event)" value="<?php if(isset($row
        ['req_date'])) echo $row['req_date']; ?>" onkeypress="isInputNumber(event)"readonly>
</div>

</div>

<!-- Services -->


    <div class="form-group ">
        <label for="service1">Services</label>
        <input type="text" class="form-control"
        id="service1" name="service1"
        onekeypress="isInputNumber(event)" value="<?php if(isset($row
        ['req_service1'])) echo $row['req_service1']; ?>" onkeypress="isInputNumber(event)"readonly>
    </div>

<div class="form-group">
        
        <input type="text" class="form-control"
        id="service2" name="service2"
        onekeypress="isInputNumber(event)" value="<?php if(isset($row
        ['req_service2'])) echo $row['req_service2']; ?>" onkeypress="isInputNumber(event)"readonly>
    </div>

    <div class="form-group">
        
        <input type="text" class="form-control"
        id="service3" name="service3"
        onekeypress="isInputNumber(event)" value="<?php if(isset($row
        ['req_service3'])) echo $row['req_service3']; ?>" onkeypress="isInputNumber(event)"readonly>
    </div>

    <div class="form-group">
        
        <input type="text" class="form-control"
        id="service4" name="service4"
        onekeypress="isInputNumber(event)" value="<?php if(isset($row
        ['req_service4'])) echo $row['req_service4']; ?>" onkeypress="isInputNumber(event)"readonly>
    </div>

    <div class="form-group">
        
        <input type="text" class="form-control"
        id="service5" name="service5"
        onekeypress="isInputNumber(event)" value="<?php if(isset($row
        ['req_service5'])) echo $row['req_service5']; ?>" onkeypress="isInputNumber(event)"readonly>
    </div>

    <div class="form-group ">
        <label for="s_result">Total Amount to Pay</label>
        <input type="number" class="form-control" id="s_result"
        name="s_result" onekeypress="isInputNumber(event)" value="<?php if(isset($row
        ['s_result'])) echo $row['s_result']; ?>" onkeypress="isInputNumber(event)" readonly>
    </div>

<!--         <div class="container-sm mt-3">
    <div class="float-end">
        <button type="submit" class="btn btn-success me-md-2"
        name="assign">Confirm</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        </div> -->

    </div>


   
  

</form>
<?php if(isset($msg)){echo $msg; } ?>
</div> <!-- End Assign Work 3rd Column -->
<script>
    function isInputNumber(evt){
        var ch = String.fromCharCode(evt.which);
        if (!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
    </script>

<?php include('includess/foot.php')?>