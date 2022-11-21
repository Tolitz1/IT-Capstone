<?php
define('TITLE', 'Dashboard');
session_start();
include('include/headers.php');
include('../dbConnection.php');

/* if(isset($_SESSION['is_login'])){
  $wEmail = $_SESSION['wEmail'];
}else{
  echo"<script>location.href = 'WorkersProfile.php' </script>";
}  */
?>


      <div class="mx-5 text-center" style=" position:absolute; left:18%; width: 70%">
        <p class="bg-dark text-white" style=" border-radius: 2px; font-size:18px; padding:5px;text-align:center; ">List of Requester</p>
        <?php
          $sql = "SELECT * FROM srequest_tb WHERE worker_id='ronnel@gmail.com'";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            echo'
            <table class="table">
              <thread>
                <tr>
                  <th scope= "col">Requester ID</th>
                  <th scope= "col">Name</th>
                  <th scope= "col">Email</th>
                </tr>
              </thread>
              <tbody>';
                while($row = $result->fetch_assoc()){
                echo '<tr>';
                echo  '<td>'.$row["req_id"]. '</td>';
                echo  '<td>'.$row["req_name"]. '</td>';
                echo  '<td>'.$row["req_email"]. '</td>';
                }
              echo'</tbody>
            </table>';
          }else{
            echo'0 Result';
          }
        ?>
      </div>
    </div><!-------End Dashboard 2nd---------->
  <?php include('include/footers.php')?>