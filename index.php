<?php

include('conn.php');
session_start();

if (isset($_POST['submit'])) {
 
    $User_name = $_POST['User_name'];
    $User_Address = $_POST['User_Address'] ;
    $User_phone = $_POST['User_phone'] ; 
    $select = mysqli_query($conn, "SELECT * FROM USERS WHERE User_name='$User_name' AND User_address='$User_Address' AND User_phone='$User_phone'");

    $count = mysqli_num_rows($select) >= 1;
    if ($count == 1) {

        $_SESSION['User_name'] = $User_name;
        $_SESSION['User_Address'] = $User_Address;
        $_SESSION['User_phone'] = $User_phone;
        header('Location: select.php');
    } else {
        echo "<script>alert('Wrong Credentials. Register to Continue');</script>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2  class="text-center card card-header text-success">Login with Admin previleges</h2>
 <form action="" method="post" class="form was-validated container p-5">
    <div class="form-group">
        <div class="row-3">
    User_name: <input type="text" name="User_name" class="form-control mx-0"> <br>
    </div>
    </div>
    User_Address: <input type="text" name="User_Address"  class="form-control mx-0"> <br>
    User_Phone: <input type="text" name="User_phone" class="form-control mx-0"> <br> 
    <button name="submit"  class="btn btn-success">Login</button>
    <a href="" class="btn btn-success">Register Here</a>
</form>
</body>
</html>