<?php
include('dbConnection.php');
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron ">
    <?php
       if(isset($_REQUEST['view'])){
       $sql = "SELECT * FROM workerslogin_tb WHERE w_login_id = {$_REQUEST['id']}";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();
       }
    ?>
<img src="<?php  if(isset($row['w_file']))  { echo $row['w_file']; } ?>" alt="" class="img_thumbnail">
</div>