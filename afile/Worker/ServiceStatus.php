<?php 
if(!isset($_SESSION)){
    session_start();
}
define('TITLE', 'Service Status');
include('include/headers.php');
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
    align-items: center;
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

<?php

if (isset($_GET['req_id'])) { 
    
     $req_id = $_GET['req_id'];  
     $query = "UPDATE srequest_tb SET req_done = 'finish' where req_id='$req_id'";  
     $run = mysqli_query($conn,$query);  
     if ($run) {  
      echo '<script type = "text/javascript">';
      echo 'alert("Service Appointment Done!");';
      echo 'window.location.href = "ServiceStatus.php"';
      echo '</script>'; 
     }else{  
          echo "Error: ".mysqli_error($conn);  
     }  
}  


$select="SELECT * from srequest_tb where req_status ='Booked' && req_done='pending' ORDER BY req_date ASC ";
$query=mysqli_query($conn,$select);
?>

<div class="col-sm-9  ms-5" style="border: 2px solid black; background-color:white; padding:15px;">

<div class="form-group" style="position: center;">

<p class="bg-dark text-white p-3 text-center" style="border-radius: 2px; font-size:20px">Service Status</p>
<form action='ServiceStatus.php' method='POST' id='my-form'>

<table class="table">
              
              <tr>
              <th><input type="hidden"></th>
              <th>First Name</th>
              <th>Amount to receive</th>
              <th>Service Status</th>
              </tr>
              
              <tbody>
            <?php 
                $num=mysqli_num_rows($query);
                if ($num>0){
                    while($result=mysqli_fetch_assoc($query)){
                        echo "                       
                        <tr>
                        <td><input type='hidden' value=".$result['req_id']."></td>
                        <td>".$result['req_name']."</td>
                        <td>".$result['s_result']."</td>
                        
                        <td>
                      
                        
                        <a href='ServiceStatus.php? req_id=".$result['req_id']."' class='btn'>Done</a>
                </form>   
                        </td>
                        </tr>
                        
                        ";
                    }
                }
            ?>
            
        </table>
      </div>

<br>
<br>


  <?php include('include/footers.php')?>