<?php 
if(!isset($_SESSION)){
    session_start();
}
include('../dbConnection.php');
/* $wEmail = $_SESSION['w_email']; */
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

  <title>Handyman Workers</title>
</head>
<style>
  body{
    background-image: url(Images/H8.jpg);
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
  .btn1:hover{
    background-color: gray;
    color: white;
  }
  a{
    color: white;
    text-decoration: none;
  }
  a:hover{
    color: white;
  }
  .search{
    width: 80%;
    height: 40px;
    margin-left: 5px;
    border-radius: 5px;
  }
  .search1:hover{
    background-color: gray;
    color: white;
  }
  .search1{
    width: 10%;
    height: 40px;
    margin-left: 5px;
    background-color: #343a40;
    color: white;
    border-radius: 5px;
  }
</style>
<body>
<!---------Top Navbar--------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container fluid">
    <a href="#" class="navbar-brand">Handyman-Salon</a>
    <span class="navbar-text">The quality you expect, the service you deserve!</span>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myMenu" aria-controls="myMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="myMenu">
        <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
            <li class="nav-item"><a href="r_index.php" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
            
             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="#">Handyman</a></li>
               <li><hr class="dropdown-divider"></li>
               <li><a class="dropdown-item" href="#">Salon</a></li>
              </ul>
            </li>
          

            
            
    </div>
  </div>
 </nav> 
<!--------- End Top Navbar--------->




<section class="section-5" style="margin-top: 10%;">
      <div class="container">
      <div class="row gx-0">
        <div class="text-center"> 
        <p class="bg-dark text-white p-3" style="border-radius: 2px; font-size:20px">Handyman Workers</p>
        <?php

            if(isset($_POST['search'])){

              $valueToSearch = $_POST['valueToSearch'];
              $query = "SELECT * FROM workerslogin_tb WHERE Concat (w_fname,w_lname,w_municipality,w_role='Handyman Worker') LIKE '%".$valueToSearch."%'";
              $search_result = filterTable($query);

            }else
            {
                $query = "SELECT * FROM workerslogin_tb Where w_role='Handyman Worker' AND w_status = 'approved' ORDER BY w_login_id DESC";
                $search_result = filterTable($query);
            }

            function filterTable($query){
                $connect = mysqli_connect("localhost","root","","finalprojecta");
                $filter_Result = mysqli_query($connect, $query);
                return $filter_Result;
            }


            if($search_result->num_rows > 0){
            ?>
            <form action="H_Workers.php" method="POST">
            <table class="table" style="text-align: center;">
              <thead>
              <tr>
                <thead><input class="search mb-3";  type="text" name="valueToSearch" placeholder="Value To Search"></input>
                   <input class="search1 mb-3";  type="submit" name="search" value="Search"></input></thead>
                <th scope="col">Name</th> 
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Municipality</th>
                <th scope="col">Book</th>
              </tr>
              </thead>
              <tbody>
              <?php  while($row = $search_result->fetch_assoc()){
                echo '<tr>';
                echo '
                <input type="hidden" value='.$row["w_login_id"].'>
                </td>';
                echo  '<td>'.$row["w_fname"]. '</td>';
                echo  '<td>'.$row["w_email"]. '</td>';
                echo  '<td>'.$row["w_role"]. '</td>';
                echo  '<td>'.$row["w_municipality"]. '</td>'; 
                echo  '<td> </form>';
                echo'

              <form action="../Worker/ViewProfile.php" method="POST" class="d-inline">
              <input type="hidden" name="id" value='.$row["w_login_id"].'>
              <button
                type = "submit"
                class="btn"
                name="view"
                value="View"
              >
                  </i> <a >View Profile</a> 
              </button>
              

              </td>
              </tr>';
               } ?>
              </tbody>
            </table>
        <?php  }else{
            echo'
            <form action"H_Workers.php" method="POST">
            <table class="table">
            <thead>
            <tr>
              <thead><input class="search mb-3";  type="text" name="valueToSearch" placeholder="Value To Search"></input>
               <input class="search1 mb-3";  type="submit" name="search" value="Search"></input>  </thead>
               <br>
               0 Result
               
            </tr>
          </thead>
          <tbody> </form>';
          }
        ?>
      </div>
    </div>
    <button class="btn1 mb-5"><a href="../Requester/r_index.php">Back</a></button>
    </div><!-------End Dashboard 2nd---------->
  </section>
    
  <!-- JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
</body>
</html>


