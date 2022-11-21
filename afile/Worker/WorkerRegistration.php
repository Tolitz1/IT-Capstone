<!-------Start registration form------>
<?php 
  include('../dbConnection.php');

  if(isset($_POST['wSignup'])){

    $wFname = $_POST['wFname'];
    $wLname = $_POST['wLname'];
    $wEmail = $_POST['wEmail'];
    $wMunicipality = $_POST['wMunicipality'];
    $wNumber = $_POST['wNumber'];

    $wGender = $_POST['wGender'];
    $wRole = $_POST['wRole'];
  /*   $wFile = $_POST['wFile']; */
    $wPassword = $_POST['wPassword'];



    //code for image uploading
  if($_FILES['wFile']['name']){

    $path = "../Admin/Image/".$_FILES['wFile']['name'];
    move_uploaded_file($_FILES['wFile']['tmp_name'],$path);
     $img="".$_FILES['wFile']['name'];
  }

    $select = "SELECT * FROM workerslogin_tb WHERE w_email = '$wEmail'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        echo '<script type  = "text/javascript">';
        echo 'alert("Email Already Taken!");';
        echo 'window.location.href = "WorkerRegistration.php"';
        echo '</script>';
    }else{
      $sql ="INSERT INTO workerslogin_tb(w_fname,w_lname, w_gender,w_municipality,w_number, w_email, w_password,w_role,w_file,w_status) VALUES('$wFname','$wLname','$wGender','$wMunicipality','$wNumber','$wEmail','$wPassword','$wRole','$img','pending')";
        mysqli_query($conn, $sql);
        echo '<script type  = "text/javascript">';
        echo 'alert("Your account is now pending for approval!");';
        echo 'window.location.href = "WorkerRegistration.php"';
        echo '</script>';
    }
}

?>
<!-- <img src="../Admin/Image/" width="500" height="400"> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <!------ Bootstrap CSS----->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!------ Font Awesome CSS----->
    <link rel="stylesheet" href="../css/fontawesome.min.css">

    <!--<style>
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
        margin-top: 10px;
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
        color: #E6DDDE;
        text-decoration: none;
      }
      a:hover{
        color: #212733;
      }
      .a #login-link{
        color: blue;
      }
      .form-row1{
        display: flex;
        grid-row:auto;
      }
      .form-row1 .form-select{
        color: gray;
        font-size: smaller;
      }
      .form-row1 input{
        font-size: smaller;
      }
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
      }
      .btn{
        background-color: #343a40;
        color: white;
        font-size: 18px;
        padding: 3px 7px;
        border-radius: 4px;
        border:1px solid black;
        width: 70%;
        text-align: center;
      }
      .btn:hover{
        background-color: #343a40;
        color: lightgray;
      }
      #login-link1 a{ 
        color: black;
        text-decoration: underline;
      }

    </style>
</head>
<body>

<section class="Form my-4 mx-5 mt-5">
  <div class="container">
    <div class="row gx-0">
      <div class="col-lg-5">
        <img src="Images/w8.jpg" class="img-fluid" style="height: 670px;" alt="Responsive image">
      </div>
      <div class="col-lg-7 px-5 pt-2">
        <h2 class="py-4" style="font-weight:bold;">Worker's Registration</h2>
        <form action="WorkerRegistration.php" method="POST" enctype="multipart/form-data">
          <div class="form-row1">
            <div class="col-lg-6 mb-2 mx-2">
              <p class="mb-1">First Name *</p>
            <input type="text" class="form-control" placeholder="Juan" name="wFname" required>
            </div>
            <div class="col-lg-6 mb-2">
            <p class="mb-1">Last Name *</p>
            <input type="text" class="form-control" placeholder="Dela Cruz" name="wLname" required>
            </div>
          </div>

          <div class="form-row1">
            <div class="col-lg-6 mb-2 mx-2">
            <p class="mb-1">Phone number *</p>

            
            <input type="number"
            
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
            
            class="form-control" placeholder="0912 *** ****" name="wNumber" maxlength="11" required>
            </div>
            <div class="col-lg-6 mb-2">
            <p class="mb-1">Municipality*</p>
              <select class="form-select" class="down" name="wMunicipality" required>
                <option Selected>Select Municipality</option>
                <option value="Lucban">Lucban</option>
                <option value="Lucena">Lucena</option>
                <option value="Pagbilao">Pagbilao</option>
                <option value="Sariaya">Sariaya</option>
                <option value="Tayabas">Tayabas</option>
              </select>
            </div>
          </div>

          <div class="form-row1">
            <div class="col-lg-6 mb-2 mx-2">
            <p class="mb-1">Gender *</p>
          <select class="form-select" aria-label="Gender" name="wGender" required>
                <option Selected>Choose a Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              </div>
              <div class="col-lg-6 mb-2">
              <p class="mb-1">Worker's Role *</p>
            <select class="form-select" aria-label="Role" name="wRole" required>
                <option Selected>Choose a type of work</option>
                <option value="Salon Worker">Salon Worker</option>
                <option value="Handyman Worker">Handyman Worker</option>
              </select>
            </div>
        
          </div>

         

          <div class="form-row1">
            <div class="col-lg-6 mb-1 mx-2">
            <p class="mb-1">Email *</p>
            <input type="email" class="form-control" placeholder="juan@gmail.com" name="wEmail" required>
            </div>
            <div class="col-lg-6 mb-1">
            <p class="mb-1">Password *</p>
            <input type="password" class="form-control" placeholder="Password" name="wPassword" required>  
            </div>
          </div>

          <!-- <div class="form-row1"> -->
            
            <div class="col-lg-12 mb-0 mx-2">
            <p class="mb-1 mt-2">Please insert one (1) picture of a certification or any related files to validate that you are a certified worker.  *</p>
            <em style="font-size:10px;" class="col-lg-8 mt-0">Note- The accepted picture  format are, jpeg, jpg and png.</em>
            <input type="file" id="myFile" class="form-control" placeholder="Sample works" name="wFile" required>
            </div>
         <!-- </div> -->

          <div class="form-row">
            <div class="col-lg-12 mx-2 mb-0">
              <button type="submit" class="btn1 mb-1" name="wSignup"  >Sign up</button>
              <em style="font-size:10px;" class="col-lg-8">Note- By clicking Sign Up, you agree to our Terms, Data Privacy and Cookie Policy</em>
              <br>
              <label class="mb-3" id="login-link1">Already have an account?<a href="WorkerLogin.php" > Log In</a></label>
              <br>
              <div class="col-lg-3">
              <button class="btn mb-2"><a class="back" href="../index.php">Back</a></button>
              </div>
            </div>
          </div>
        
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