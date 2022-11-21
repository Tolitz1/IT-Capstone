<?php
define('TITLE','Dashboard');
include('includess/head.php');
include('../dbConnection.php');
?>
      <div class="col-sm-8 col-md-9 ms-5" style=" position:absolute; left:18%;"><!-------Start Dashboard 2nd---------->

<style>
  
 th {
 position: relative;
 text-align: center;
}

.table{
    background-color: white;
    border: 2px solid black;
   
  }
  .table th{
    background-color: #343a40;
    color: white;
    font-size: 14px;
  }
  .table th, td,thead{
    border-bottom: 1px solid lightgray;
  }
  .table tr:hover{
    background-color: lightgray;
  }
  .search{
    width: 80%;
    height: 40px;
    margin-left: 5px;
    border-radius: 5px;
  }
  .search1{
    width: 10%;
    height: 40px;
    margin-left: 5px;
    background-color: #343a40;
    color: white;
    border-radius: 5px;
  }

  .search1:hover{

    background-color: gray;
    color: white;

  }

  .btn{
    width: 60%;
    height: 35px;
    margin-left: 5px;
    background-color: #343a40;
    color: white;
    border-radius: 5px;
  }



  
</style>
      <div class=" text-center">
      <p class="bg-dark text-white p-3" style="border-radius: 2px; font-size:20px;">List of Approved Workers</p>
        
      <?php

        if (isset($_GET['w_login_id'])) { 
            
            $w_login_id = $_GET['w_login_id'];  
            $query = "DELETE FROM workerslogin_tb  where w_login_id='$w_login_id'";  
            $run = mysqli_query($conn,$query);  
            if ($run) {  
              echo '<script type = "text/javascript">';
              echo 'alert("User Successfully removed!");';
              echo 'window.location.href = "dashboard.php"';
              echo '</script>'; 
            }else{  
                  echo "Error: ".mysqli_error($conn);  
            }  
        }  


?>
        
        <?php
        if(isset($_POST['search'])){

                $valueToSearch = $_POST['valueToSearch'];
                $query = "SELECT * FROM workerslogin_tb WHERE Concat (w_fname,w_lname,w_municipality,w_Role) LIKE '%".$valueToSearch."%'";
                $search_result = filterTable($query);
            
              }else
              {
                  $query = "SELECT * FROM workerslogin_tb WHERE w_status='approved' ORDER BY w_login_id DESC ";
                  $search_result = filterTable($query);
              }
              
              function filterTable($query){
                  $connect = mysqli_connect("localhost","root","","finalprojecta");
                  $filter_Result = mysqli_query($connect, $query);
                  return $filter_Result;
              }

          
          
          if($search_result->num_rows > 0){
            echo'
            <form action="dashboard.php" method="POST">
            <table class="table">
              <thead>
                <tr>
                  <thead><input class="search mb-3";  type="text" name="valueToSearch" placeholder="Search"></input>
                   <input class="search1 mb-3";  type="submit" name="search" value="Search"></input>  </thead>
                  <th scope= "col">First Name</th>
                  <th scope= "col">Last Name</th>
                  <th scope= "col">Email</th>
                  <th scope= "col">Municipality</th>
                  <th scope= "col">Type of Worker</th>
                  <th scope= "col">Action</th>
                </tr>
              </thead>
              <tbody>';
                while($row = $search_result->fetch_assoc()){
                echo '<tr>';
                echo '                            
                <input type="hidden" name="w_login_id" value='.$row["w_login_id"].'/>
                </td>';
                echo'</td>';
                echo '
                <input type="hidden" value='.$row["w_login_id"].'>
                </td>';
                echo  '<td>'.$row["w_fname"]. '</td>';
                echo  '<td>'.$row["w_lname"]. '</td>';
                echo  '<td>'.$row["w_email"]. '</td>';
                echo  '<td>'.$row["w_municipality"]. '</td>';
                echo  '<td>'.$row["w_role"]. '</td>';
                echo '<td>';
                echo '                   
                
                <a href="dashboard.php? w_login_id='.$row['w_login_id'].' "class="btn">Delete</a>
                </td>';
                echo'</td>';
                }
              echo'</tbody>
            </table> </form>';
          }else{
            
            echo'
            <form action="dashboard.php" method="POST">
            <table class="table">
            <thead>
            <tr>
              <thead><input class="search mb-3";  type="text" name="valueToSearch" placeholder="Search"></input>
               <input class="search1 mb-3";  type="submit" name="search" value="Search"></input>  </thead>
               <br>
               0 Result
               
            </tr>
          </thead>
          <tbody> </form>';
          }              
        ?>
      </div>



<!-- --------------------------------------------------------------------------------------------------------------------------- -->




      <div class="mt-5 text-center">
      <p class="bg-dark text-white p-3" style="border-radius: 2px; font-size:20px;">List of Approved Customers</p>
      <?php

          if (isset($_GET['r_login_id'])) { 
              
              $r_login_id = $_GET['r_login_id'];  
              $query = "DELETE FROM requesterlogin_tb  where r_login_id='$r_login_id'";  
              $run = mysqli_query($conn,$query);  
              if ($run) {  
                echo '<script type = "text/javascript">';
                echo 'alert("User Successfully removed!");';
                echo 'window.location.href = "dashboard.php"';
                echo '</script>'; 
              }else{  
                    echo "Error: ".mysqli_error($conn);  
              }  
          }  

          ?>
        
        <?php
          if(isset($_POST['searchs'])){

            $valueToSearchs = $_POST['valueToSearchs'];
            $query = "SELECT * FROM requesterlogin_tb WHERE Concat (r_fname,r_lname,r_municipality) LIKE '%".$valueToSearchs."%'";
            $search_result = filtersTable($query);

          }else
          {
              $query = "SELECT * FROM requesterlogin_tb WHERE r_status='approved' ORDER BY r_login_id DESC";
              $search_result = filtersTable($query);
          }

          function filtersTable($query){
              $connect = mysqli_connect("localhost","root","","finalprojecta");
              $filter_Result = mysqli_query($connect, $query);
              return $filter_Result;
          }
        
          
      if($search_result->num_rows > 0){
            echo'
            <form action="dashboard.php" method="POST">
            <table class="table">
              <thead>
                <tr>
                <thead><input class="search mb-3";  type="text" name="valueToSearchs" placeholder="Search"></input>
                <input class="search1 mb-3";  type="submit" name="searchs" value="Search"></input>  </thead>
                  <th scope= "col">First Name</th>
                  <th scope= "col">Last Name</th>
                  <th scope= "col">Email</th>
                  <th scope= "col">Municipality</th>
                  <th scope= "col"></th>
                </tr>
              </thead>
              <tbody>';
              while($row = $search_result->fetch_assoc()){
                echo '<tr>';
                echo '                            
                <input type="hidden" name="r_login_id" value='.$row["r_login_id"].'/>
                </td>';
                
                echo  '<td>'.$row["r_fname"]. '</td>';
                echo  '<td>'.$row["r_lname"]. '</td>';
                echo  '<td>'.$row["r_email"]. '</td>';
                echo  '<td>'.$row["r_municipality"]. '</td>';
                echo '<td>';
                echo '                                 
                <a href="dashboard.php? r_login_id='.$row['r_login_id'].' "class="btn">Delete</a>
                </td>';
         
                }
              echo'</tbody>
            </table> </form>';
          }else{
            echo'
            <form action="dashboard.php" method="POST">
            <table class="table">
            <thead>
            <tr>
              <thead><input class="search mb-3";  type="text" name="valueToSearchs" placeholder="Search"></input>
               <input class="search1 mb-3";  type="submit" name="searchs" value="Search"></input>  </thead>
               <br>
               0 Result
               
            </tr>
          </thead>
          <tbody> </form>';
          }
        ?>
      </div>
    </div><!-------End Dashboard 2nd---------->
    
  <?php  include('includess/foot.php')?>