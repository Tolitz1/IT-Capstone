<?php 
if(!isset($_SESSION)){
    session_start();
}
include('../dbConnection.php');
$wEmail = $_SESSION['w_email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!------Bootstrap-------->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

<!------Custom CSS-------->
<link rel="stylesheet" href="../css/custom.css">

<!------Style CSS-------->
<link rel="stylesheet" href="../css/responsive.css">

<link rel="stylesheet" href="../css/styles.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Handyman Workers</title>
</head>
<style>
  body{
    background-image: url(Images/H6.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
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
  .btn{
    padding: 4px 18px;
    background-color: #343a40;
    color: white;
  }
  .btn:hover{
    background-color: gray;
    color: black;
  }
  .btn1{
    background-color: #343a40;
    color: white;
    font-size: 18px;
    padding: 10px 15px;
    border-radius: 4px;
    border:1px solid black;
    width: 15%;
    text-align: center;
  }
  a{
    color: white;
    text-decoration: none;
  }
  a:hover{
    color: black;
  }

</style>

<body>
<!---------Top Navbar--------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container fluid">
    <a href="../index.php" class="navbar-brand">Handyman-Salon</a>
    <span class="navbar-text"> The quality you expect, the service you deserve!</span>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myMenu" aria-controls="myMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="myMenu">
        <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
            <!-- <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li> -->
    

            
            
    </div>
  </div>
 </nav> 
<!--------- End Top Navbar--------->





<section class="section-5" style="margin-top: 10%;">
      <div class="container">
      <div class="row gx-0">
        <div class="text-center"> 
        <p class="bg-dark text-white p-3" style="border-radius: 2px; font-size:25px">Handyman Workers</p>
        <?php
          $sql= "SELECT * FROM workerslogin_tb WHERE w_role ='Handyman Worker'";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            ?>
            <table class="table" style="text-align: center;">
              <thead>
              <tr>
                
                <th scope="col">Name</th> 
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Municipality</th>
                <th scope="col">Book</th>
              </tr>
              </thead>
              <tbody>
              <?php  while($row = $result->fetch_assoc()){
                echo '<tr>';
                
                echo  '<td>'.$row["w_fname"]. '</td>';
                echo  '<td>'.$row["w_email"]. '</td>';
                echo  '<td>'.$row["w_role"]. '</td>'; 
                echo  '<td>'.$row["w_municipality"]. '</td>';
                echo  '<td>';
                echo'
                
              <form">
              <input type="hidden" name="id" value='.$row["w_login_id"].'>
              <button 
                type = "button"
                class="btn"
                name="view"
                value="View"
                data-toggle="modal"
                data-target="#myModal1"
              >
                  </i> <a >View Profile</a> 
              </button>
              </form>

              </td>
              </tr>';
               } ?>
              </tbody>
            </table>
        <?php  }else{
            echo'0 Result';
          }
        ?>
      </div>
    </div>
    <button class="btn1"><a href="../index.php">Back</a></button>
    </div><!-------End Dashboard 2nd---------->
  </section>


  <!-- The Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Failed to View</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="center">
             <div class="form-row">
              <div class="col-lg-6"></div>
                <h4 style="color: black;">Sorry for the interuption!</h4>
                <p style="color: black;">Kindly Sign-Up first before request an appointment.</p>
            </div>
          </div>  
        </div>
        <!---- Modal footer -->
        <div class="modal-footer">
           <button type="button" id="c-btn" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


<!-------End of modal------>
    
  <!-- JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
</body>
</html>


