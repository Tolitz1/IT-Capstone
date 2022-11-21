<?php
define('TITLE','Service Requests');
session_start();
include('include/headers.php');
include('../dbConnection.php');

if(isset($_SESSION['is_login'])){
  $wEmail = $_SESSION['wEmail'];
  
/*   $sql= "SELECT w_fname FROM workerslogin_tb WHERE w_email='$wEmail' ";

  $result =$conn->query($sql);
if($result->num_rows==1){
$row = $result->fetch_assoc();
$wFname = $row['w_fname'];


} */
}/* else{
  echo"<script> location.href='WorkerRequest.php'</script>";
}  */

?>
<!-- Start 2nd Column -->






<div class="col-sm-4 mb-5" style="position:absolute; left:18%;" >
    <?php
       /*  include('../dbConnection.php');
 $sql = "SELECT *FROM srequest_tb WHERE worker_id='aldrin@gmail.com'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

        

            echo '<div class="card mb-3 mx-3" >';
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
             value="Delete" name="close">';
              
        echo'</div>';
      echo '</div>';
      echo '</div>';
      echo'</form>';
     }
    } */

    include('../dbConnection.php');
    /* CAPPOINTMENT */ /* dharlynaquitania20@gmail.com */ /* ronnel@gmail.com */ /* kentalmira23@gmail.com */
    $sql = "SELECT *FROM srequest_tb WHERE worker_id IN ('dharlynaquitania20@gmail.com','') && req_status='pending' ORDER BY req_id DESC";
           $result = $conn->query($sql);
           if($result->num_rows > 0){
           while($row = $result->fetch_assoc()){
   
           
   
               echo '<div class="card mb-3 mx-3" >';
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
                value="Delete" name="close">';
                 
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
$sql = "SELECT * FROM srequest_tb  WHERE req_id = 
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
    <label for="reqeusterid">Request ID</label>
        <input type="text" class="form-control"
        id="reqeusterid" name="reqeusterid" value="<?php if(isset($row
        ['req_id'])) echo $row['req_id']; ?>" readonly>
    </div>


    <div class="form-group col-md-6">
        <label for="workerid">Worker ID</label>
        <input type="text" class="form-control"
        id="workerid" name="workerid" value="<?php if(isset($row
        ['worker_id'])) echo $row['worker_id']; ?>"readonly>
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
            <input type="datetime" class="form-control" id="inputDate"
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

    <!-- Services -->
        <div class="container-sm mt-5 mb-3">
 <!--    <div class="float-end">
            <input type="hidden" name="req_id" value="<?php echo $row ['req_id'];?>"/>
        <button type="submit" class="btn btn-success me-md-2"name="approve" value="approve"> Confirm</button>
        <button type="reset" class="btn btn-secondary" name="deny" value="Deny">Reset</button>
        </div> -->

        <form action="WorkerRequest.php" method="POST">
              <input type="hidden" name="req_id" value="<?php if(isset($row
            ['req_id'])) echo $row['req_id']; ?>"/>
              <input type="submit" name="approve" value="Approve"/>
              <input type="submit" name="deny" value="Delete"/>
            </form> 

        </div>

        

    


   <!--  <div class="row">
        <div class="form-group col-md-6">
            <label for="assigntech">Assign to Workders</label>
            <input type="text" class="form-control" id="assigntech"
            name="assigntech">
        </div> -->
 

 
  

    </div>


    <?php

    include('../dbConnection.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['approve'])){
    $req_id = $_POST['req_id'];

    $select = "UPDATE srequest_tb SET req_status = 'Booked' WHERE req_id = '$req_id'";
    $result = mysqli_query($conn, $select);
    echo '<script type = "text/javascript">';
    echo ' alert("User Approved!");';
    echo 'window.location.href = "WorkersRequest.php"';
    echo '</script>'; 

    require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

    //Create instance of PHPMailer
	$mail = new PHPMailer(true);
   
   
    //Set mailer to use smtp
        $mail->isSMTP();
    //Define smtp host
        $mail->Host = "smtp.gmail.com";
    //Enable smtp authentication
        $mail->SMTPAuth = true;
    //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = "tls";
    //Port to connect smtp
        $mail->Port = "587";
    
    
    //Set gmail username
        $mail->Username = "handymansalon@gmail.com";
    //Set gmail password
        $mail->Password = "handymansalon";
    //Email subject
        $mail->Subject = "Your Service Appointmnet at HandymanSalon Website has been approved!";
    //Set sender email
        $mail->setFrom('handymansalon@gmail.com');
    //Enable HTML
        $mail->isHTML(true);
    //Attachment
        /* $mail->addAttachment('img/attachment.png'); */
    //Email body
        $mail->Body = "<p>Good Day! This message is to inform you that your service appointment is approved!</p><br>
        <p>Your service will deliver at your doorstep by your chosen worker. Kindly wait patiently. Thank you!</p>";
    //Add recipient

/* dharlynaquitania20@gmail.com */ /* alvinsalvacion06@gmail.com */ /* kentalmira23@gmail.com */ /* mamel2607@gmail.com */
/* CAPPROVAL */
        $mail->addAddress ("alvinsalvacion06@gmail.com");


        
    //Finally send email
        if ( $mail->send() ) {
            echo "Email Sent..!";
        }else{
            echo "Message could not be sent. Mailer Error: ";
        }
    //Closing smtp connection
        $mail->smtpClose();

}


if(isset($_POST['deny'])){
    $req_id = $_POST['req_id'];

    $select = "UPDATE srequest_tb SET req_status = 'deny' WHERE req_id = '$req_id'";
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Denied!");';
    echo 'window.location.href = "WorkersRequest.php"';
    echo '</script>';

    require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

    //Create instance of PHPMailer
	$mail = new PHPMailer(true);
   
   
    //Set mailer to use smtp
        $mail->isSMTP();
    //Define smtp host
        $mail->Host = "smtp.gmail.com";
    //Enable smtp authentication
        $mail->SMTPAuth = true;
    //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = "tls";
    //Port to connect smtp
        $mail->Port = "587";
    
    
    //Set gmail username
        $mail->Username = "handymansalon@gmail.com";
    //Set gmail password
        $mail->Password = "handymansalon";
    //Email subject
        $mail->Subject = "Your Service Appointmnet at HandymanSalon Website has been Denied!";
    //Set sender email
        $mail->setFrom('handymansalon@gmail.com');
    //Enable HTML
        $mail->isHTML(true);
    //Attachment
        /* $mail->addAttachment('img/attachment.png'); */
    //Email body
        $mail->Body = "<p>Good Day! This message is to inform you that your service appointment is denied!</p><br>
        <p>The denial of your service appointmnet are due to possible reason of insufficient information, invalid credential or inavailability of the worker.</p>
        <p>Although you may still try to book an appointment again next time or you may choose another worker. Thank you!</p>";
    //Add recipient


/* CDENIAL */ /* dharlynaquitania20@gmail.com */ /* alvinsalvacion06@gmail.com */ /* kentalmira23@gmail.com */ /*mamel2607@gmail.com */
        $mail->addAddress ("mamel2607@gmail.com");


        
    //Finally send email
        if ( $mail->send() ) {
            echo "Email Sent..!";
        }else{
            echo "Message could not be sent. Mailer Error: ";
        }
    //Closing smtp connection
        $mail->smtpClose();
}
?>

   
  

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

<?php include('include/footers.php')?>