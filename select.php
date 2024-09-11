<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.php" class="btn btn-primary m-4">Add New</a>
    <table border="1" class="table container mb-3 table-bordered table-striped ">
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
    <td><a href="delete.php?User_id=<?php echo $row['User_id']?>">Delete</a></td>
    <td><a href="update.php?User_id=<?php echo $row['User_id']?>">Update</a></td>
</tr>
<?php
        }
    ?>
    </table>
   
</body>
</html>