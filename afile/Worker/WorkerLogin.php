<?php 
  include('../dbConnection.php');
  session_start();
?>

<?php
  if(isset($_POST['wlogin'])){
    $wEmail = $_POST['wEmail'];
    $wPassword = $_POST['wPassword'];

    $select = mysqli_query($conn, "SELECT * FROM workerslogin_tb WHERE w_email = '$wEmail' AND w_password = '$wPassword'");
    $row = mysqli_fetch_array($select);

    $w_status =$row['w_status'];

    $select2 = mysqli_query($conn, "SELECT * FROM workerslogin_tb WHERE w_email = '$wEmail' AND w_password = '$wPassword'");
    $check_user=mysqli_num_rows($select2);

    if($check_user==1){
        $_SESSION["w_status"]=$row['w_status'];
        $_SESSION["w_email"]=$row['w_email'];
        $_SESSION["w_password"]=$row['w_password'];

        if($w_status=="approved"){
            echo '<script type  = "text/javascript">';
            echo 'alert("Login Success!");';
            echo 'window.location.href = "WorkerPersonalinfo.php"';
            echo '</script>';
        }
        elseif($w_status=="pending"){
            echo '<script type  = "text/javascript">';
            echo 'alert("Your account is still pending for approval!");';
            echo 'window.location.href = "WorkerLogin.php"';
            echo '</script>';
        }else{
            echo "Incorrect email or password!";
        }
    }

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
        <img src="Images/w8.jpg" class="img-fluid" style="height: 500px;" alt="Responsive image">
      </div>
      <div class="col-lg-7 px-5 pt-5">
        <h1 class="py-4" style="font-weight:bold;">Login Your Account</h1>
        <form action="WorkerLogin.php" method="POST">
          <div class="form-row">
            <div class="col-lg-6">
              <input type="email" class="form-control" placeholder="Email" name="wEmail">
               <small class="form-text mt-0">We'll never share your email with anyone else.</small>
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-6">
              <input type="password" class="form-control my-3 p-2" placeholder="Password" name="wPassword">  
            </div>
          </div>
          <div class="form-row">
            <div class="col-lg-6">
              <button type="submit" name="wlogin" class="btn1 mb-3 ">Log In</button>
            </div>
          </div>
          <a href="#">Forgot password?</a>
          <p>Don't have an account?<a href="WorkerRegistration.php"> Register Here.</a></p>
          <button class="btn2"><a style="text-decoration: none; color:white;" href="../index.php">Back</a></button>
          
        </form>

      </div>
    </div>
  </div>
</section>

<!-- JavaScript-->
<script src="../js/Jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>