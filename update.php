<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('conn.php');
    $User_id= $_GET['User_id'];
    $selecct =mysqli_query($conn , "SELECT * FROM Users where User_id='$User_id'");
    $row=mysqli_fetch_array($selecct);
    ?>
    <form action="" method="post">
    User_name<input type="text" name="User_name" value="<?php echo $row['User_name']?>"> <br>
    User_Address<input type="text" name="User_Address"  value="<?php echo $row['User_Address']?>"> <br>
    User_Phone<input type="text" name="User_phone" value="<?php echo $row['User_phone']?>"> <br>
    <br>
    <input type="submit" name="submit">

  </form>  
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    # code...
    $User_name=$_POST['User_name'];
    $User_Address=$_POST['User_Address'];
    $User_Phone=$_POST['User_phone'];
    $update=mysqli_query($conn , "UPDATE users set User_name= '$User_name',User_Address='$User_Address' , User_Phone ='$User_Phone'  where User_id='$User_id'");
    if ($update) {
        # code...
        header('location:select.php');
    }
    exit;

}

?>