<?php
include('include/headers.php');
include('../dbConnection.php');
include('include/WorkerRegistration');


if(isset($_POST['wSignup'])){
    $image=$_FILES['wFile'];

    if(mysqli_query($conn,$sql))
    {

        move_uploaded_file($_FILES['wFile'],"Images/$image");
        echo"<script>alert('Image has not been Uploaded to Folder')</script>";
    }
    else {
        echo "<script>alert('Image does not Upload to Folder')</script>";
    }
}
?>