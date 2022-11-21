<?php
define('TITLE', 'Payment Status');
include('includess/head.php');
include('../dbConnection.php');
?>

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
margin-left: auto;
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

<div class="col-sm-9  ms-5" style="position:absolute; left:18%;border: 2px solid black; padding:15px;">
    

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Incoming')">Incoming Payments</button>
  <!-- <button class="tablinks" onclick="openCity(event, 'Paris')">Received Payments</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Request Withdrawal</button> -->
</div>

<div id="Incoming" class="tabcontent">

<div class="form-group" style="position: center;">

<!-- <p class="bg-dark text-white p-3 text-center" style="border-radius: 2px; font-size:20px">List Incoming Payments</p> -->


<?php
        $sql = "SELECT * FROM srequest_tb WHERE req_status = 'approve' ORDER BY req_tnum DESC";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
          ?>
          <table class="table">
            <thead>
            <tr>
            <th>Requester Id</th>
            <th>Worker</th>
            <th>Name</th>
            <th>Contact Method</th>
            <th>Payment Option</th>
            <th>Amount</th>
            <th>Transaction Number</th>
            <th>Confirmation</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php  while($row = $result->fetch_assoc()){
              echo '<tr>';
              echo  '<th scope ="row">'.$row['req_id'].'</th>';
              echo  '<td>'.$row["worker_id"]. '</td>';
              echo  '<td>'.$row["req_name"]. '</td>';
              echo  '<td>'.$row["req_method"]. '</td>';
              echo  '<td>'.$row["req_radio"]. '</td>';
              echo  '<td>'.$row["s_result"]. '</td>';
              echo  '<td>'.$row["req_tnum"]. '</td>';
             
              echo  '<td>';
              echo'
              
            <form action="" method="POST">
            <input type="hidden" name="req_id" value='.$row["req_id"].'>
            <button type="submit" name="book" value="Book">Confirm</button>
                        
            
            </form>
             ';
            echo '</td>';
            echo  '<td>'.$row["req_book"]. '</td>';
            echo '</tr>';
             } ?>
            </tbody>
          </table>
      <?php  }else{
          echo'0 Result';
        }
      ?>




</div>

</div>

<!-- <div id="Paris" class="tabcontent">
  
<div class="form-group" style="position: center; width: 80%;"> -->

<!-- <p class="bg-dark text-white p-3 text-center" style="border-radius: 2px; font-size:20px">List Incoming Payments</p> -->

<!-- </div>
</div> -->


<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
</div>

<?php
   if(isset($_POST['book'])){
    $req_id = $_POST['req_id'];

    $select = "UPDATE srequest_tb SET req_book = 'Book' WHERE req_id = '$req_id'";
    $result = mysqli_query($conn, $select);
    echo '<script type = "text/javascript">';
    echo ' alert("User Approved!");';
    echo 'window.location.href = "paymentstatus.php"';
    echo '</script>'; 
}

?>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<?php include('includess/foot.php')?>