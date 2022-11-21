<?php
define('TITLE', 'Ratings');
session_start();
include('includes/header.php');
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
    font-size: 18px;
  }
  .table th, td{
    border-bottom: 1px solid lightgray;
  }
  .table tr:hover{
    background-color: lightgray;
  }
</style>


<div class="col-sm-8  ms-5" style="position:absolute; left:18%; border: 2px solid black; padding:15px;">
    <form action="" method="POST" class="mx-3">
        <h3 class="mb-3"> Ratings</h3>

      
    <?php
        include('../dbConnection.php');
 $sql = "SELECT *FROM srequest_tb WHERE req_name='juan' ";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

          

            echo '<div class="card mb-3 mx-3" >';
             echo '<div class="card-header">';
              echo 'Customer Name:'.  $row['req_name']; 
            echo '</div>';
             echo '<div class="card-body">';
              echo '<h5 class="card-title">Worker Info:'.$row
              ['worker_id'];
              echo'</h5>';
           
      
              echo '<input class="form-control" name="rate" placeholder="How is my work?" style="height: 120px;">';
              echo '</input>';
             

              echo '<div class="d-grid gap-2 d-md-flex justify-content-md-end">';
              
          
          echo'<input type="hidden" name="id" value=' .$row["req_id"].'>';
           echo '<input type="submit" class="btn btn-danger me-md-2"
             value="Submit" name="view">';
          echo '<input type="submit" class="btn btn-secondary"
             value="Close" name="close">';
              
        echo'</div>';
      echo '</div>';
      echo '</div>';
     
     }
    }   

   
    ?>
    </form>




<?php
include('../dbConnection.php');
if(isset($_POST['view'])){
           
    $rate = $_POST ['rate']; 

    $query = "INSERT INTO srequest_tb (req_rate) VALUES ('$rate') ";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
     echo '<script> alert ("Data Saved"); </script>';
    /*  header('Location: CheckStatus.php'); */
    }else{  
      echo '<script> alert ("Data Not Saved"); </script>';
    }
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


<?php
include('includes/footer.php');
?>