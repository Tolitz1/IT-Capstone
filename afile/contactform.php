<?php
include('dbConnection.php');

if(isset($_POST['submit'])){

  $Cname = $_POST['C_name'];
  $Csubject = $_POST['C_subject'];
  $Cemail = $_POST['C_email'];
  $Cmassage = $_POST['C_massage'];

  $select = "SELECT * FROM contact_tb WHERE = '$Cname'";

  $result = mysqli_query($conn, $select);


    $sql="INSERT INTO contact_tb(cname,csubject,cemail,cmessage) value ('$Cname', '$Csubject', '$Cemail', '$Cmassage')";

      mysqli_query($conn, $sql);
      echo '<script type = "text/javascript">';
      echo 'alert ("Successfully Submitted!")';
      echo 'window.location.href = "index.php"';
      echo '</script>';


}

?>

<div class="container-sm text-center"> <!--Start first column-->
        <form action="" method="POST">
          <input type="text" class="form-control" name="C_name" placeholder="Name"><br> 
          <input type="text" class="form-control" name="C_subject" placeholder="Subject"><br>
          <input type="email" class="form-control" name="C_email" placeholder="Email"><br>
          <textarea class="form-control" name="C_massage" placeholder="How can we help you?" style="height: 120px;"></textarea> <br>
          <input type="submit" class="btn btn-outline-dark" name="submit"><br></br>
        </form>
</div><!--End first column-->