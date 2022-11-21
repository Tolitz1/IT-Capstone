<!-- <?php
define('TITLE', 'Payment');
include('includes/header.php');
include('../dbConnection.php');

?>

<?php
    if(isset($_REQUEST['payment'])){

    $sql = "SELECT * FROM srequest_tb WHERE req_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    }

?>

<?php
include('../dbConnection.php');

if(isset($_POST['submit'])){

  $num = $_POST['t_num'];
  
  
  $query = "UPDATE srequest_tb SET req_tnum ='$num' WHERE req_id = {$_REQUEST['id']} ";
  
  $query_run = mysqli_query($conn, $query);
  if($query_run){
      echo '<script> alert ("Data Saved")</script>';
    }else{  
     echo '<script> alert ("Data Not Saved")</script>';
    }     
  } 
?>

<style>
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}
</style>

<div class="col-sm-6  ms-5" style=" position:absolute; left:18%; border: 2px solid black; padding:15px;">
<form action="" method="POST" class="mx-3">
<h3 class="mb-3">Payment Status</h3>

<?php
  $sql= "SELECT * FROM srequest_tb WHERE req_name ='juan delacruz' && req_status ='approve'";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    ?>
    <table class="table">
      <thead>
      <tr>

        <th scope="col">Request ID</th> 
        <th scope="col">Name</th> 
        <th scope="col">Mode of Payment</th>  
        <th scope="col">Amount to Pay</th>
        <th scope="col">Transaction Number</th>
        <th scope="col">Action</th>
        <th scope="col">Booking</th>
      </tr>
      </thead>
      <tbody>
      <?php  while($row = $result->fetch_assoc()){
     
        echo '<tr>';
        echo  '<td>'.$row["req_id"]. '</td>';
        echo  '<td>'.$row["req_name"]. '</td>';
        echo  '<td>'.$row["req_radio"]. '</td>';
        echo  '<td>'.$row["s_result"]. '</td>'; 
        echo  '<td> <input type="number" name="t_num" value='.$row["req_tnum"].'> </td>';
        echo  '<td>';

        /* if($row["req_status"]== 'approve'){ */
          echo '
          
          <input type="hidden" name="id" value='.$row["req_id"].'>
          <button type="submit" name="submit">Send</button>';
       /*  } else if ($row ["req_status"]== 'deny'){
          echo '<button name="close">Denied</button>';
        } else{
          echo '<button>Pending</button>';
        }    */               
        echo  '</td>';
        echo' <td>';
        

        if($row["req_book"]== 'Book'){
          echo '
          <input type="hidden" name="id" value='.$row["req_id"].'>
          <button type="button" name="payment" style="background-color:gray; color:white">Booked</button>';
        } else if ($row ["req_book"]== 'pending'){
          echo '<button>Pending</button>';
        }
       
        echo'
        <td>';
        
       '</tr>';    
       } ?>
      </tbody>
    </table>
<?php  }else{
    echo'0 Result';
  }
?>

</form>
</div>



<div class="col-sm-3  ms-5" style=" position:absolute; left:70%; border: 2px solid black; padding:15px;">

<h3 style="color:black; text-align:center;">Payment Procedure</h3>

<h6 style="color:black; text-align:center;">Kindly send the payment through this gcash account.</h6>
    <h3 style="color:black; text-align:center;">Admin Account:</h3>
    <h4 style="color:black; text-align:center;">Handyman-Salon</h4>
    <h4 style="color:black; text-align:center;">09158177228</h4>
    <br>
    <p style="color:black; text-align:center;">If the payment is successfully sent enter the transaction number for admin confirmation.</p>
    <br>
    <h4 style="color:black; text-align:center;">Thank You!</h4>
</div>




<?php
include('includes/footer.php');
?> -->