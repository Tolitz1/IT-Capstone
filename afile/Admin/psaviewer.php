<?php 
if(!isset($_SESSION)){
    session_start();
}
include('includess/head.php');
include('../dbConnection.php');

if(isset($_SESSION['is_admin_login'])){
    $adminEmail = $_SESSION['adminLogEmail'];

}else{
    echo "<script> location.href='../index.php'; </script>";
}

?>

<div class="col-md-10">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of Students</p>
    <?php
        $sql ="SELECT * FROM student WHERE stu_status = 'pending' ORDER BY stu_id ASC";
        $result = $conn-> query($sql);
        if($result->num_rows > 0) {
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()){ 
            echo '<tr>';
            echo '<th scope="row">'.$row['stu_id'].'</th>';
            echo '<td>'.$row['stu_name'].'</td>';
            echo '<td>'.$row['stu_email'].'</td>';
            echo '<td>';
            echo '
            


            <form action="../readfile.php" method="POST" class="d-inline">
            <input type="hidden" name="id" value='.$row["stu_id"].'>
                    <button
                    type = "submit"
                    class="btn btn-success"
                    name="view"
                    value="View">
                    <i class="fa fa-search" aria-hidden="true"></i>
                 </button>
                 </form>
            </td>
            </tr>';
             } ?>
        </tbody>
    </table>
      <?php  } else {
          echo "0 Result";
      } 
      
      if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM student WHERE stu_id = {$_REQUEST['id']}";
        if($conn->query($sql)== TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
        } else {
            echo "Unable to Delete Data";
        }
      }
      
      
      
      ?>
</div>

<!-- div Row Close from Header -->
<div>
    <a class="btn btn-danger box" href="./addnewstudent.php"><i class="fas fa-plus fa-2x"></i></a>
</div>

<!-- div Container-fluid close from header -->

<?php 
include('./admininclude/footer.php');
?>