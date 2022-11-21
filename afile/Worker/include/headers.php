<!DOCTYPE html>
<html lang="en">
<head>
<title>Appointment Schedule</title>
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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">



<title><?php echo TITLE?></title>
<style>
  body{
    background-image:url(Images/H9.jpg);
    background-size:cover;
    };
</style>
</head>
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
            <!-- <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
             <a href="#Service" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="#">Handyman</a></li>
               <li><hr class="dropdown-divider"></li>
               <li><a class="dropdown-item" href="#">Salon</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="#About Us" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="#Contacts" class="nav-link">Contacts</a></li> -->
            
    </div>
  </div>
 </nav> 
<!--------- End Top Navbar--------->





<!--------- Start Container--------->
<div class="container fluid" style="margin-left:20px;">
    <div class="row"> <!--------- Start Row--------->
      <nav class="col-sm-5 bg-dark sidebar" style="width: 230px;  border-radius:3px;" > <!--------- Start Sidebar 1st Column--------->
        <div class="sidebar-sticky">
          <ul class="nav flex-column  my-3">
         <!--  <li class="nav-item mb-3" style="height:250px; width:250px; object-fit:cover;">
            <img src="<?php echo $wImg?>" alt="w_profile" style="height:250px; width:250px; object-fit:cover;"
            id="w_profile" class="wprofile rounded-circle">
          </li>
          <div class="form-group">
            <label for="wImg" style="color: white;">Upload Image</label>
            <input type="file" class="form-control-file" id="wImg"
            name="wImg">
        </div> -->
        <!-- <button type="submit" class="btn btn-light mt-3" name="nameupdate" style="width:100%;">Update</button> -->
      <a href="WorkersProfile.php" class="navbar-brand">
      <img src="Images/thesislogo.png" alt="thesislogo" style="width:60%; position:absolute; left:40px"></a>
       
      
      <li class="nav-item" style="margin-top: 120px;"><!-- <a class="nav-link active" href="WorkersProfile.php"> -->
             <!--  <i class="fas fa-user"></i>Dashboard</a></li> -->



            <li class="nav-item"><a class="nav-link active" href="WorkerPersonalinfo.php">
              <i class="fas fa-user"></i>Personal Information</a></li>
            <li class="nav-item"><a class="nav-link active" href="WorkersRequest.php">
              <i class="fas fa-user"></i>Request Appointment</a></li>
           
           
           
              <!-- <li class="nav-item"><a href="WorkerPayment.php" class="nav-link">
              <i class="far fa-calendar-check"></i>Service Payment</a></li> -->


              <li class="nav-item"><a href="ServiceStatus.php" class="nav-link">
              <i class="far fa-calendar-check"></i>Service Status</a></li>

            <li class="nav-item"><a href="indexx.php" class="nav-link">
              <i class="fas fa-exclamation-circle"></i>My Schedule</a></li>



            <li class="nav-item"><a href="WorkerChangePass.php" class="nav-link">
              <i class="fas fa-key"></i>Change Password</a></li>
            <li class="nav-item"><a href="../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>Log Out</a></li>
              
              
          </ul>
        </div>         
      </nav> <!--------- End Sidebar 1st column--------->