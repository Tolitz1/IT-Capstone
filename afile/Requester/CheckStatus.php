<?php
  define('TITLE','Appointment Status');
  session_start();
  include('includes/header.php');
  include('../dbConnection.php');
  
   /*  if($_SESSION['is_login']){ */
/*       $rEmail= $_SESSION ['r_email']; */
   /*  }else{
      echo "<script>location.href='RequesterProfile.php';</script>";
    } */

?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<style>
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}
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
  }
  .table tr:hover{
    background-color: lightgray;
  }
</style>



    
<div class="col-sm-8  ms-5" style="position:absolute; left:18%; padding:15px; border: 2px solid black;background-color:white"> <!--------- Start Profile Area 2nd Column--------->
        <form action="" method="POST" class="mx-3">

       <!--  <h3 class="mb-3"> Appointment Status</h3> -->
        <p class="bg-dark text-white p-3 text-center" style="border-radius: 2px; font-size:20px"> Appointment Status</p>
        <?php
        /* CStatus */
          $sql= "SELECT * FROM srequest_tb WHERE req_name ='Alvin'";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            ?>
            <table class="table">
              <thead>
              <tr>
                <th scope="col">Worker Name</th>
                <th scope="col">Name</th> 
                <th scope="col">Payment</th>
                <th scope="col">Amount to pay</th>
                <!-- <th scope="col">Payment Approval</th> -->
                <th scope="col">Service Status</th>
                
              </tr>
              </thead>
              <tbody>
              <?php  while($row = $result->fetch_assoc()){ 
               
                echo '<tr>';
                echo  '<td>'.$row['worker_id'].'</td>';
                echo  '<td>'.$row["req_name"]. '</td>';
                echo  '<td>'.$row["req_radio"]. '</td>';
                echo  '<td>'.$row["s_result"]. '</td>'; 
                echo  '<td>';

                if($row["req_status"]== 'Booked'){
                  echo '
                  <input type="hidden" name="id" value='.$row["req_id"].'>
                  <p>Booked</p>';
                } else if ($row ["req_status"]== 'deny'){
                  echo '<p>Denied</p>';
                } else{
                  echo '<p>Pending</p>';
                }             
                echo'  
              </td>';
                           
              echo '</tr>';
               } ?>
              </tbody>
            </table>
        <?php  }else{
            echo'0 Result';
          }
        ?>
        </form>
    </div>



 <!-- Handyman Modal -->



<?php
include('includes/footer.php');
?>