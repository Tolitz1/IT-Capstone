<?php
include('../dbConnection.php');
?>

<style>
body{
   background-color:#343a40;

}
.btn{
    background-color: white;
    color: white;
    font-size: 14px;
    padding: 8px 18px;
    border-radius: 4px;
    border:1px solid black;
    width: 15%;
    text-align: center;
    margin-top: 10px;
  }
  .btn:hover{
   background-color: lightgray;
   color:white ;
  }
  a{
    color: black;
    text-decoration: none;
  }

</style>
<body>
   
<div class="col-sm-6 mt-5 mx-3 jumbotron " style="position: absolute; left:33%; top:10%; border-radius:3px; ">
<?php



$sql="SELECT * FROM workerslogin_tb WHERE w_login_id = {$_REQUEST['id']}";
$result = $conn->query($sql);

   if ($result->num_rows > 0) {

   while($row = $result->fetch_assoc()) {

       ?>
     
     <?php echo '<img src="Image/'.$row['w_file'].'" width="500" height="400">'; ?>
     <br>
     <button class="btn"><a href="ViewProfile.php">Back</a></button>

   
  <?php
       }
       }
       ?>
</div>
      </body>
<!-- <img src="/Worker/Images.php/'.$row['w_file'].'" width="500" height="400"> -->
<!-- <img src="Image/'.$row['w_file'].'" width="500" height="400"> -->
