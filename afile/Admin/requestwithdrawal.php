<?php
define('TITLE', 'Request Withdrwal');
include('includess/head.php');
include('../dbConnection.php');
?>
 <div class="col-sm-9  ms-5" style="position:absolute; left:18%;border: 2px solid black; padding:15px;">
 <div class="form-group" style="position: center;">


 <?php
        $sql = "SELECT * FROM srequest_tb WHERE req_request = 'Requested' ORDER BY req_tnum DESC";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
          ?>
          <table class="table">
            <thead>
            <tr>
            <th>Worker Id</th>
            <th>Worker</th>
           
          
          
            <th>Amount</th>
            
            <th>Confirmation</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php  while($row = $result->fetch_assoc()){
              echo '<tr>';
              echo  '<th scope ="row">'.$row['req_id'].'</th>';
              echo  '<td>'.$row["worker_id"]. '</td>';
          
             
             
              echo  '<td>'.$row["s_result"]. '</td>';
           
             
              echo  '<td>';
              echo'
              
            <form action="" method="POST">
            <input type="hidden" name="req_id" value='.$row["req_id"].'>
            <button type="submit" name="with" value="Book">Confirm Withdrawal</button>
                        
            
            </form>
             ';
            echo '</td>';
            echo  '<td>'.$row["req_withdrawal"]. '</td>';
            echo '</tr>';
             } ?>
            </tbody>
          </table>
      <?php  }else{
          echo'0 Result';
        }
      ?>

 </div>
 </div>


 <?php
   if(isset($_POST['with'])){
    $req_id = $_POST['req_id'];

    $select = "UPDATE srequest_tb SET req_withdrawal = 'Confirm' WHERE req_id = '$req_id'";
    $result = mysqli_query($conn, $select);
    echo '<script type = "text/javascript">';
    echo ' alert("Confirm Withdrawal!");';
    echo 'window.location.href = "requestwithdrawal.php"';
    echo '</script>'; 
}

?>

  <?php include('includess/foot.php')?>