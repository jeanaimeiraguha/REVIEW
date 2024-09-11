<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Lists</title>
</head>
<body style="background-color: #28f0dfa2;">
   
    <h2  class="text-center card card-header bg-dark ">LIST OF USERS IN SYSTEM</h2>
    <a href="index.php" class="btn btn-warning m-4 right-end">Back</a>
    <a href="add.php" class="btn btn-primary m-4 right-end" style="float: right;">Add New</a>
    <table border="1" class="table container mb-4 table-bordered table-striped table-hover mx-5 "> <br><br>
    
        <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>User Address</th>
        <th>User Phone</th>
        <th colspan="2">Operations</th>
        </tr>
        <?php
        include('conn.php');
        $select =mysqli_query($conn , "SELECT * FROM users");
        while($row=mysqli_fetch_array($select)){
        ?>
        
<tr>
    <td><?php echo $row['User_id']?></td>
    <td><?php echo $row['User_name']?></td>
    <td><?php echo $row['User_Address']?></td>
    <td><?php echo $row['User_phone']?></td>  
    <td><a href="delete.php?User_id=<?php echo $row['User_id']?> " class="btn btn-danger">Delete</a></td>
    <td><a href="update.php?User_id=<?php echo $row['User_id']?>" class="btn btn-success">Update</a></td>
</tr>
<?php
        }
    ?>
    </table>
   
</body>
</html>