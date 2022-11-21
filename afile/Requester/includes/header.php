<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------Bootstrap-------->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!------Custom CSS-------->
    <link rel="stylesheet" href="../css/custom.css">

    <!------Style CSS-------->
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Google Fonts CSS-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
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
    <a href="r_index.php" class="navbar-brand">Handyman-Salon</a>
    <span class="navbar-text">The quality you expect, the service you deserve!</span>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myMenu" aria-controls="myMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="myMenu">
        <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
            <li class="nav-item"><a href="r_index.php" class="nav-link">Home</a></li>
          
              </ul>
            </li>
            <li class="nav-item"><a href="#About Us" class="nav-link"></a></li>
            <li class="nav-item"><a href="#Contacts" class="nav-link"></a></li>
           <!-- <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Log In</a></li>-->
            
 
    </div>
  </div>
 </nav> 

 <!--------- Start Container--------->
 <div class="container fluid " style="margin-top: 30px; margin-left:20px;">
    <div class="row" > <!--------- Start Row--------->
      <nav class="col-sm-2 bg-dark sidebar " style="width: 230px;  border-radius:3px;" > <!--------- Start Sidebar 1st Column--------->
        <div class="sidebar-sticky" >
          <ul class="nav flex-column my-3">

          <a href="WorkersProfile.php" class="navbar-brand">
          <img src="Images/thesislogo.png" alt="thesislogo" style="width:60%; position:absolute; left:40px"></a>
            <li class="nav-item" style="margin-top: 150px;"><a class="nav-link" href="RequesterProfile.php">
              <i class="fas fa-user"></i>Profile</a></li>
          <!--   <li class="nav-item"><a href="SubmitRequest.php" class="nav-link">
              <i class="far fa-calendar-check"></i>Apointment Schedule</a></li> -->
            <li class="nav-item"><a href="CheckStatus.php" class="nav-link">
              <i class="fas fa-exclamation-circle"></i>Service Status</a></li>
          <!--   <li class="nav-item"><a href="RequesterPayment.php" class="nav-link">
              <i class="fas fa-money-bill-wave"></i>Payment</a></li> -->
           <!--  <li class="nav-item"><a href="Rating.php" class="nav-link">
              <i class="fas fa-history"></i>Ratings</a></li> -->
            <li class="nav-item"><a href="Requesterchangepass.php" class="nav-link">
              <i class="fas fa-key"></i>Change Password</a></li>
            <li class="nav-item"><a href="../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>Log Out</a></li>
              
          </ul>
        </div>         
      </nav> <!--------- End Sidebar 1st column--------->
      