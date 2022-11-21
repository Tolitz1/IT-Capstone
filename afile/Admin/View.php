<?php
include('../dbConnection.php');
include('includess/headss.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
</head>
<body>

<h2>All Records</h2>


<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Name</td>
    <td>Images</td>
  </tr>

<?php
$records = mysqli_query($conn,"SELECT * from workerslogin_tb"); // fetch data from database

while($row = mysqli_fetch_array($records))
{
?>
 <tr>
    <td><?php echo $row['w_fname']; ?></td>
    <td><?php echo $row['w_lname']; ?></td>
    <td><img src="<?php echo $row['w_file']; ?>" width="100" height="100"></td>
  </tr>	
<?php
}
?>

</table>


</body>
</html>
