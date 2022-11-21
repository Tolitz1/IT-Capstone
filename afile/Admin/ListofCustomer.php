
<?php 
if(!isset($_SESSION)){
    session_start();
}
define('TITLE', 'List of Workers and Customers');
include('includess/head.php');
include('../dbConnection.php');

?>
<style>
    .table{
    background-color: white;
    border: 2px solid black;
   
  }
  .table th{
    background-color: #343a40;
    color: white;
    font-size: 14px;
  }
  .table th, td{
    border-bottom: 1px solid lightgray;
    text-align: center;
  }
  .table tr:hover{
    background-color: lightgray;
  }
  .approve{
    padding: 4px 18px;
    background-color: #343a40;
    color: white;
    border-radius: 3px;
  }
  .approve:hover{
    background-color: gray;
    color: black;
  }
  .deny{
    padding: 4px 18px;
    background-color: #343a40;
    color: white;
    border-radius: 3px;
  }
  .deny:hover{
    background-color: gray;
    color: black;
  }
  .btn{
    padding: 4px 18px;
    background-color: #343a40;
    color: white;
    border-radius: 3px;
  }
  .btn:hover{
    background-color: gray;
    color: black;
  }

</style>



<div class="col-md-10" style="position:absolute; left:18%; width: 80%;">
    <!-- Table -->
    <p class="bg-dark text-white p-3" style="border-radius: 2px; font-size:20px;">Customers Approval</p>
    <?php
        $sql ="SELECT * FROM requesterlogin_tb WHERE r_status = 'pending' ORDER BY r_login_id DESC";
        $result = $conn-> query($sql);
        if($result->num_rows > 0) {
    ?>
    <table class="table">
        <thead>
            <tr>
              
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
                <th scope="col">Municipality</th>
                <th scope="col">View Submitted File</th>
                <th scope="col">Action</th>

                
            </tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()){ 
            echo '<tr>';
        
            echo '<td>'.$row['r_fname'].'</td>';
            echo '<td>'.$row['r_lname'].'</td>';
            echo '<td>'.$row['r_email'].'</td>';
            echo '<td>'.$row['r_number'].'</td>';
            echo '<td>'.$row['r_municipality'].'</td>';
         
        
            echo '<td>';
            echo '
            <form action="Customerfile.php" method="POST" class="d-inline">
            <input type="hidden" name="id" value='.$row["r_login_id"].'>
                    <button type = "submit" class="btn" name="view" value="View">
                    View
                    </button>

                    
            </td>';
            echo'<td>';
            echo'
            </form>
            <form action="ListofCustomer.php" method="POST">
            <input type="hidden" name="r_login_id" value='.$row["r_login_id"].'/>
            <input type="submit" class="approve" name="approve" value="Approve"/>
            <input type="submit" class="approve" name="deny" value="Deny"/>
          </form>

          </td>';

            '</tr>';
             } ?>
        </tbody>
    </table>
      <?php  } else {
          echo "0 Result";
      } 

      if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM requesterlogin_tb WHERE r_login_id = {$_REQUEST['id']}";
        if($conn->query($sql)== TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
        } else {
            echo "Unable to Delete Data";
        }
      }



      ?>
</div>

<?php
    include('../dbConnection.php');

    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['approve']) ){

    $r_login_id = $_POST['r_login_id']; 

    $select = "UPDATE requesterlogin_tb SET r_status = 'approved' WHERE r_login_id = '$r_login_id'";
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Approved!");';
    echo 'window.location.href = "ListofCustomer.php"';
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
        $mail->Subject = "Your Registration in HandymanSalon Website has been approved!";
    //Set sender email
        $mail->setFrom('handymansalon@gmail.com');
    //Enable HTML
        $mail->isHTML(true);
    //Attachment
        /* $mail->addAttachment('img/attachment.png'); */
    //Email body
        $mail->Body = "<p>Good Day! This message is to inform you that your registration is approved!</p><br>
        <p>Inline with this you may now proceeed to login. Thank you!</p>";
    //Add recipient

/* CApproval */ /* mamel2607@gmail.com	 */
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
    

    $r_login_id = $_POST['r_login_id'];
    

    $select = "DELETE FROM requesterlogin_tb WHERE r_login_id = '$r_login_id'";
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("User Denied!");';
    echo 'window.location.href = "ListofCustomer.php"';
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
        $mail->Subject = "Your Registration in HandymanSalon Website has been Denied!";
    //Set sender email
        $mail->setFrom('handymansalon@gmail.com');
    //Enable HTML
        $mail->isHTML(true);
    //Attachment
        /* $mail->addAttachment('img/attachment.png'); */
    //Email body
        $mail->Body = "<p>Good Day! This message is to inform you that your registration is denied!</p><br>
        <p>The denial of your registration are due to possible reason of insufficient information or invalid credential.</p>
        <p>Inline with this you may not proceeed to login. Although you may still try to register again. Thank you!</p>";
    //Add recipient

/* CDenial */ /* alvinsalvacion06@gmail.com	 */

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

<!-- End Worker JS -->




  <?php include('includess/foot.php')?>

