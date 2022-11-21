<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handyman-Salon</title>
<!-- Bootstrap CSS --> 
<link rel="stylesheet" href="css/bootstrap.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/fontawesome.min.css">

<!-- Google Fonts CSS-->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/styles.css"> 

<!-- Custom CSS -->
<link rel="stylesheet" href="css/responsive.css"> 

<!-- Custom CSS -->
<script src="js/app.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<!-------------------- Start of Navigation--------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand mx-5" href="#">Handyman-Salon</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse text-center mx-5" id="navbarNav">
  <ul class="navbar-nav me-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#s">Salon Services</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#h">Handyman Services</a></li>
          </ul>
        </li>
        
    <li class="nav-item">
      <a class="nav-link" href="#"data-toggle="modal" data-target="#cont">Contacts</a>
    </li>
  </ul>
  <ul class="navbar-nav ms-auto">
    <li class="nav-item active">

    <button class="nav-link mx-3 " type="button" id="login" data-toggle="modal" data-target="#myModal1">
      <a>Log In</a>
      </button>
    </li>

    <li class="nav-item active">

    <button class="nav-link mx-3 " type="button" id="signup"  data-toggle="modal" data-target="#myModal">
      <a>Sign Up</a>
      </button>
    </li>
  </ul>
</div>
</div>
</nav>

<!-------------------- End of Navigation--------------------------->


<!-------------------- Start of Carousel--------------------------->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Image/c3.jpg" class="d-block w-100" alt="First Slide">
    </div>
    <div class="carousel-item">
      <img src="Image/sm.png" class="d-block w-100" alt="Second Slide">
    </div>
    <div class="carousel-item">
      <img src="Image/C.jpg" class="d-block w-100" alt="Third Slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>-->
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>-->
  </button>
</div>

<!-------------------- End of Carousel--------------------------->


<!--------------- Start of services---------->
<section class="section-1">
<div class="container text-center">
  <div class="row">
    <div class="col-md-6">
      <div class="H6">
        <img src="Image/H6.jpg" alt="H6">
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel">
      <h1>Handyman Services</h1>
        <p class="pt-4" style="text-align:justify;">
        Maintaining your home may be a challenge. While you may not have the time or resources to complete all of the tasks, you do have a local Handyman-Salon with a dependable team of specialists who provide handyman services with the quality you expect and the service you deserve.
        </p>
        <p style="text-align:justify;">
        A handyman, also known as a fixer, is a person who is experienced in a variety of house repairs. These jobs involve trade skills, repair work, and maintenance work on both interior and exterior.
        </p>
        <button type="button" class="btn btn-outline-dark"> <a style="color: black; text-decoration:none" href="Worker/HandymanLists.php">View More</a></button>
      </div>
    </div>
  </div>
</div>
</section>

<section class="section-2">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-6">
        <div class="panel">
        <h1>Salon Services</h1>
          <p class="pt-4" style="text-align:justify;">
          We are always happy to provide Salon Services at Home at your doorstep. Handyman-Salon offers nearly every salon and beauty service. Contact us today for any form of beauty salon or nail service at the comfort of your home. If you are looking for the best beauty salon services, you have come to the right place. The Handyman-Salon offers the best home beauty salon services.
          <p style="text-align:justify;">
          Salon stylists provide a wide range of aesthetic services, from haircutting to scalp treatments. Shampooing, cutting, and styling hair are typical responsibilities, but they may also perform make-up service, manicure, pedicure, and hair treatments such as deep conditioning, permanents, hair coloring, and weaving.
          </p>
          <button type="button" class="btn btn-outline-dark"> <a style="color: black; text-decoration:none" href="Worker/SalonLists.php">View More</a></button>
        </div>
      </div>
      <div class="col-md-6">
      <div class="S2">
        <img src="Image/indexsalon.jpg" alt="S2">
      </div>
    </div>
  </div>
</div>
</section>

<section class="section-3 container-fluid p-0">
  <div class="cover">
    <div class="content text-center">
      <h1>Easy step to book an appointment</h1>
      <p>
      By simply following these simple steps, you can instantly book an appointment with your prepared workers at your convenience. 
      </p>
    </div>
  </div>
  <div class="container-fluid text-center">
    <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
        <div class="rect"><i class="fab fa-chrome"></i><p>Search</p></div>
        <div class="rect"><i class="fas fa-clipboard-list"></i><p>Book an Appointmnet</p></div>
        <div class="rect"><i class="fas fa-money-bill-wave"></i><p>Pay</p></div>
        <div class="rect"><i class="fas fa-check-circle"></i><p>Service done</p></div>
   </div>
  </div>
</section>

<section class="section-4 container-fluid p-0 text-center">
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <h1>Important Notice</h1>
      <p  class="" style="margin-left:20%; margin-right:20%; text-align: justify;">
      Handyman-Salon is a free web portal that helps Handyman and Salon workers in Lucena, Tayabas, Lucban, Pagbilao, Tayabas, and Sariaya to promote their services. It also helps individuals in hiring a specific worker. This web portal was created by the developers to boost the profit of the workers by increasing the area of labor. To better serve you, we welcome your requests and suggestions. to make this website more user-friendly.
      </p>
    </div>
  </div>
</section>

<!-------Start Contact Us------>
<div class="container-fluid text-center p-0">
  <div class="covers">
    <div class="contents text-center">
    <h2 class="text-center ">Contact Us</h2>

      <!--Start first column-->
      <?php include ('contactform.php') ?>
      <!--End first column-->
      </div>
</div><!----End second column---->
</div>
<!-------End Contact Us------>


<!-- Salon Modal -->
<div class="container" id="Modal">
  <div class="modal fade" id="s">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       <!--- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Salon Services</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form>
        <!-- Modal body -->
        <div class="modal-body">
              <div class="col-lg-6"></div>
                <h6 style="color:black;  text-align:center;">Hair Treatment</h6>
                <h6 style="color:black;  text-align:center;">Nail Treatment</h6>
                <h6 style="color:black;  text-align:center;">Skin Care Service</h6>
                <h6 style="color:black;  text-align:center;">Make up Service</h6>
            
        </div>
        </form>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" id="c-btn" class="btn btn-secondary" data-dismiss="modal"&times;>Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>

  <!-- Handyman Modal -->
<div class="container" id="Modal">
  <div class="modal fade" id="h">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       <!--- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Handyman Services</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form>
        <!-- Modal body -->
        <div class="modal-body">
              <div class="col-lg-6"></div>
                <h6 style="color:black; text-align:center;">Carpentry</h6>
                <h6 style="color:black; text-align:center;">Electrical</h6>
                <h6 style="color:black; text-align:center;">Plumbing</h6>
                <h6 style="color:black; text-align:center;">Painting</h6>
                <h6 style="color:black; text-align:center;">Maintenance & Repair</h6>
        </div>
        </form>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" id="c-btn" class="btn btn-secondary" data-dismiss="modal"&times;>Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- Contact Modal -->
<div class="container" id="Modal">
  <div class="modal fade" id="cont">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       <!--- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Contact us at: </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form>
        <!-- Modal body -->
        <div class="modal-body">
              
                <h5 style="color:black;">handymansalonph@gmail.com</h5>
                
        </div>
        </form>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" id="c-btn" class="btn btn-secondary" data-dismiss="modal"&times;>Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>

<div class="container" id="Modal">

<!-------Start of Modal------>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       <!--- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register As</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="center">
             <div class="form-row">
              <div class="col-lg-6"></div>
                
                
                <li class="nav-item active">
                  <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#M2"> <a href="Worker/WorkerRegistration.php">Worker</a> </button>
                </li>

                <li class="nav-item active">
                  <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#M3" ><a href="Requester/RequesterRegistration.php">Customer</a></button>
                </li>
            </div>
          </div>  
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" id="c-btn" class="btn btn-secondary" data-dismiss="modal"&times;>Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


  <!-- The Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login As</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="center">
             <div class="form-row">
              <div class="col-lg-6"></div>
                <li class="nav-item active">
                  <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#M1" ><a href="Admin/login.php">Admin</a></button>
                </li> 
                
                <li class="nav-item active">
                  <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#M2"> <a href="Worker/WorkerLogin.php">Worker</a> </button>
                </li>

                <li class="nav-item active">
                  <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#M3" ><a href="Requester/RequesterLogin.php">Customer</a></button>
                </li>
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

<!-------Start Footer------>
<footer>
<div class="container-fluid p-0">
    <div class=" row text-left">
      <div class="col-md-5 col-md-5">
        <h1 class="text-light">About Us</h1>
        <p class="text-muted" style="text-align:justify;">
        Handymansalon is a free web-portal that help Handyman and Salon worker in Lucena,
      Tayabas, Lucban, Pagbilao, Tayabas, and Sariaya to promote their services.
      It also helps individuals in hiring a specific worker. This web-portal was created
      by the developers in order to boost the profit of the worker by increasing the aria 
      of labor. In order to better serve you, we welcome your requests and suggestions. 
      to make this website more user-friendly.
        </p>
        <p class="pt-4 text-muted">
          Copyright @2021 | Alright Reserved
        </p>
      </div>
      <div class="col-md-5">
      
      </div>
      <div class="col-md-2 col-sm-12">
      <h4 class="text-light"> Follow Us</h4>
        <p class="text-muted"> Let us be social.</p>
        <div class="column text-light">
        <i class="fab fa-facebook-f"> </i>
        <i class="fab fa-twitter"> </i>
        <i class="fab fa-instagram"> </i>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- JavaScript-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html> 