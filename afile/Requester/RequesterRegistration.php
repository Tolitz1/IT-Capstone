<!-------Start registration form------>
<?php 
  include('../dbConnection.php');

  if(isset($_POST['rSignup'])){

    $rFname = $_POST['rFname'];
    $rLname = $_POST['rLname'];
    $rEmail = $_POST['rEmail'];
    $rMunicipality = $_POST['rMunicipality'];
    $rNumber = $_POST['rNumber'];
    $rBirthday = $_POST['rBirthday'];
    $rGender = $_POST['rGender'];

    $rPassword = $_POST['rPassword'];



 //code for image uploading
 if($_FILES['rFile']['name']){

  $path = "../Requester/ImageUpload/".$_FILES['rFile']['name'];
  move_uploaded_file($_FILES['rFile']['tmp_name'],$path);
   $rimg="".$_FILES['rFile']['name'];
}

    $select = "SELECT * FROM requesterlogin_tb WHERE r_email = '$rEmail'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        echo '<script type  = "text/javascript">';
        echo 'alert("Email Already Taken!");';
        echo 'window.location.href = "RequesterRegistration.php"';
        echo '</script>';
    }else{
      $sql ="INSERT INTO requesterlogin_tb(r_fname,r_lname,r_birthday,r_gender,r_municipality,r_number, r_email, r_password, r_image, r_status) VALUES('$rFname','$rLname','$rBirthday','$rGender','$rMunicipality','$rNumber','$rEmail','$rPassword','$rimg','pending')";
        mysqli_query($conn, $sql);
        echo '<script type  = "text/javascript">';
        echo 'alert("Your account is now pending for approval!");';
        echo 'window.location.href = "RequesterRegistration.php"';
        echo '</script>';
    }
}
?>


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
 
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}
    

    </style>
</head>
<body>

<section class="Form my-4 mx-5 mt-5">
  <div class="container ">
    <div class="row gx-0">
      <div class="col-lg-5">
        <img src="Images/w8.jpg" class="img-fluid" style="height: 670px;" alt="Responsive image">
      </div>
      <div class="col-lg-7 px-5 pt-2">
        <h2 class="py-4" style="font-weight:bold;">Customer Registration</h2>
        <form action="RequesterRegistration.php" method="POST" method="POST" enctype="multipart/form-data">
          <div class="form-row1">
            <div class="col-lg-6 mb-2 mx-2">
            <p class="mb-1">First Name *</p>
            <input type="text" class="form-control" placeholder="Juan" name="rFname" required>
            </div>
            <div class="col-lg-6 mb-2">
            <p class="mb-1">Last Name *</p>
            <input type="text" class="form-control" placeholder="Dela Cruz" name="rLname" required>
            </div>
          </div>

          <div class="form-row1">
            <div class="col-lg-6 mb-2 mx-2">
            <p class="mb-1">Phone Number *</p>
            <input type="number" 
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); required"
            
            class="form-control" placeholder="0912 *** ****" name="rNumber"  maxlength="11">
            </div>
            <div class="col-lg-6 mb-2">
            <p class="mb-1">Municipality *</p>
              <select class="form-select" class="down" name="rMunicipality" required>
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
          <select class="form-select" aria-label="Gender" name="rGender" required>
                <option Selected>Choose a Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              </div>

              <div class="col-lg-6 mb-2">
              <p class="mb-1">Birthday *</p>
            <input type="date" class="form-control" style="font-size: smaller; color:gray;" placeholder="Birthday" name="rBirthday" id="bd" required>
            </div>
          </div>

         

          <div class="form-row1">
            <div class="col-lg-6 mb-1 mx-2">
            <p class="mb-1">Email *</p>
            <input type="email" class="form-control" placeholder="juan@gmail.com" name="rEmail" required>
            </div>
            <div class="col-lg-6 mb-1">
            <p class="mb-1">Password *</p>
            <input type="password" class="form-control" placeholder="Password" name="rPassword" required>  
            </div>
          </div>

          <div class="col-lg-12 mb-1 mx-2">
            <p class="mb-1 mt-2">Please insert a picture of a valid ID with your current address.  *</p>
            <em style="font-size:10px;" class="col-lg-8 mt-0">Note- The accepted picture  format are, jpeg, jpg and png.</em>
            <input type="file" id="myFile" class="form-control" placeholder="Sample Works" name="rFile" required>
            </div>

          <div class="form-row">
            <div class="col-lg-12 mx-2">
              <button type="submit" class="btn1 mb-1" name="rSignup">Sign up</button>
              <em style="font-size:10px;" class="col-lg-8">Note- By clicking Sign Up, you agree to our Terms, Data Privacy and Cookie Policy</em>
              <br>
              <label class="mb-3" id="login-link ">Already have an account?<a href="RequesterLogin.php" style="color: #212733; text-decoration:underline" > Log In</a></label>
              <br>
              <div class="col-lg-3">
              <button class="btn mb-2"><a class="back" href="../index.php" id="login-link">Back</a></button>
              </div>
            </div>
          </div>
          <?php if (isset($regmsg)) {echo $regmsg;} ?>
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