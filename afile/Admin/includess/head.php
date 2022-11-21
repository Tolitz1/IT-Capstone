<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
<title><?php echo TITLE ?></title>
<style>
  body{
    background-image:url(Image/H9.jpg);
    background-size:cover;
    };
</style>

</head>
<body>
<!---------Top Navbar--------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="position: fixed;">
<div class="container fluid" >
  <a href="../index.php" class="navbar-brand">Handyman-Salon</a>
  <span class="navbar-text">The quality you expect, the service you deserve!</span>
  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myMenu" aria-controls="myMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="myMenu">
        <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
            <li class="nav-item"><a href="#" class="nav-link"></a></li>
          
              </ul>
            </li>
            <li class="nav-item"><a href="#About Us" class="nav-link"></a></li>
            <li class="nav-item"><a href="#Contacts" class="nav-link"></a></li>
  
  </div>
</div>
</nav> 
<!--------- End Top Navbar--------->




    <div class="container fluid " style="margin-top: 100px; margin-left:20px;">
    <div class="row" > <!--------- Start Row--------->
      <nav class="col-sm-2 bg-dark sidebar " style="width: 230px;  border-radius:3px; " > <!--------- Start Sidebar 1st Column--------->
        <div class="sidebar-sticky" >
          <ul class="nav flex-column my-3">
          <img src="../Worker/Images/thesislogo.png" alt="thesislogo" style="width:60%; position:absolute; left:40px; top:30px"></a>
            <li class="nav-item" style="margin-top: 200px;"><a class="nav-link" href="dashboard.php">
              <i class="fas fa-user"></i>Dashboard</a></li>
            <li class="nav-item"><a href="ViewProfile.php" class="nav-link">
              <i class="far fa-calendar-check"></i>Worker Approval</a></li>

              <li class="nav-item"><a href="listofCustomer.php" class="nav-link">
              <i class="far fa-calendar-check"></i>Customer Approval</a></li>


            <li class="nav-item"><a href="servicerequest.php" class="nav-link">
              <i class="fas fa-exclamation-circle"></i>Service Request</a></li>
    
              <!--         <li class="nav-item"><a href="paymentstatus.php" class="nav-link">
              <i class="fas fa-money-bill-wave"></i>Payment Status</a></li>
            <li class="nav-item"><a href="requestwithdrawal.php" class="nav-link">
              <i class="fas fa-history"></i>Request Withdrawal</a></li> -->
           <!--  <li class="nav-item"><a href="changepass.php" class="nav-link">
              <i class="fas fa-key"></i>Change Password</a></li> -->
            <li class="nav-item"><a href="../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>Log Out</a></li>
              
          </ul>
        </div>         
      </nav>