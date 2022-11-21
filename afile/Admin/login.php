<?php 
  include('../dbConnection.php');
  session_start();
  if(!isset($_SESSION['is_adminlogin'])){
  if(isset($_REQUEST['aEmail'])){
    $aEmail= mysqli_real_escape_string($conn,trim($_REQUEST['aEmail']));
    $aPassword= mysqli_real_escape_string($conn,trim($_REQUEST['aPassword']));
    $sql = "SELECT a_email, a_password FROM adminlogin_tb WHERE a_email= '".$aEmail."' AND a_password= '" .$aPassword."' limit 1";
    $result= $conn->query($sql);
    if($result->num_rows==1){
      $_SESSION['is_adminlogin'] = true;
      $_SESSION['aEmail'] = $aEmail;
      echo "<script>location.href='dashboard.php';</script>";
      exit;
    } else{
      $msg='<div class="alert alert-warning mt-2">Enter Valid Email and Password </div>';
    }
  }
}else{
  echo "<script>location.href='dashboard.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>

    <!------ Bootstrap CSS----->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!------ Font Awesome CSS----->
    <link rel="stylesheet" href="../css/fontawesome.min.css">

   <!-- <style>
      .custom-margin{
        margin-top: 8vh;
      }
    </style>-->

<style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body{
        background: #E6DDDE; 
      }
      .row{
        background: whitesmoke;
        border-radius: 30px;
        box-shadow: 12px 12px 22px grey;
      }
      img{
        border-top-left-radius: 30px ;
        border-bottom-left-radius: 30px ;
      }
      .btn1{
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: #212733;
        color: #E6DDDE;
        border-radius: 4px;
        font-weight: bold;
      }
      .btn1:hover{
        background: #E6DDDE;
        border: 1px solid;
        color: #212733;
      }
      a{
        color: #212733;
      }
      a:hover{
        color: darkgray;
      }
      .btn2{
      background-color: #212733;
      color: white;
      font-size: 18px;
      padding: 5px 10px;
      border-radius: 4px;
      border:1px solid black;
      width: 15%;
      text-align: center;
    }
    </style>
</head>
<body>

<section class="Form my-5 mx-5">
  <div class="container ">
    <div class="row gx-0">
      <div class="col-lg-5">
        <img src="Image/w8.jpg" class="img-fluid" style="height: 500px;" alt="Responsive image">
      </div>
      <div class="col-lg-7 px-5 pt-5">
        <h1 class="py-4" style="font-weight:bold;">Sign up your account.</h1>
        <form>
          <div class="form-row">
            <div class="col-lg-6">
              <input type="email" class="form-control" placeholder="Email" name="aEmail">
               <small class="form-text mt-0">We'll never share your email with anyone else.</small>
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-6">
              <input type="password" class="form-control my-3 p-2" placeholder="Password" name="aPassword">  
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-6">
              <button type="submit" class="btn1 mb-3 ">Log In</button>
            </div>
          </div>
          <a href="#">Forgot password?</a>
          <p>Don't have an account?<a href="Requester/RequesterRegistration.php"> Register Here.</a></p>
          <button class="btn2"><a style="text-decoration: none; color:white;" href="../index.php">Back</a></button>
          <?php if(isset($msg)){echo $msg;} ?>
        </form>

      </div>
    </div>
  </div>
</section>



 <!-- <div class="mt-5 text-center" style="font-size: 30px;">
    <i class="fas fa-stethoscope"></i>
    <span>Handyman and Salon Services</span>
  </div>
    <p class="text-center" style="font-size: 20px;">
    <i class="fas fa-user-secret text-danger"></i> Admin Area (Demo)</p>

    <div class="container-fluid">
      <div class="row justify-content-center mt-5">
        <div class="col-sm-6 col-md-4">
          <form action="" class="shadow-lg p-4" method="POST">
            <div class="form-group">
             <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label>
               <input type="email" class="form-control" placeholder="Email" name="aEmail">
               <small class="form-text">We'll never share your email with anyone else.</small>
            </div>
              <div>
              <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Password</label>
               <input type="password" class="form-control" placeholder="Password" name="aPassword">
              </div>
              <div class="d-grid gap-2">
              <button type="submit" class="btn btn-outline-dark btn-block mt-5 shadow-sm ">Log In</button>
              </div>
          *********
          </form>
            <div><a href="../index.php" class="btn btn-dark mt-3 font-weight-bold center shadow-sm">Back to Home</a></div>
        </div>
      </div>
    </div>--->

<!-- JavaScript-->
<script src="../js/Jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>