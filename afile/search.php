<?php
if(isset($_POST['search'])){

    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM workerslogin_tb WHERE Concat (w_fname,w_lname,w_municipality,w_Role) LIKE '%". $valueToSearch."%'";
    $search_result = filterTable($query);

}else
{
    $query = "SELECT * FROM workerslogin_tb ";
    $search_result = filterTable($query);
}

function filterTable($query){
    $connect = mysqli_connect("localhost","root","","finalprojecta");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form action="search.php" method="POST">
        <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
        <input type="submit" name="search" value="Filter"><br><br>

        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Municipality</th>
                <th>Type of Worker</th>
            </tr>
            <?php while($row = mysqli_fetch_array($search_result)): ?>
                <tr>
                    <td><?php echo $row['w_fname'];?></td>
                    <td><?php echo $row['w_lname'];?></td>
                    <td><?php echo $row['w_email'];?></td>
                    <td><?php echo $row['w_municipality'];?></td>
                    <td><?php echo $row['w_role'];?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </form>
</body>
</html>