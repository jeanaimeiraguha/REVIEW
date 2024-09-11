<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Admin Name" name="admin_name"><br><br>
        <input type="text" placeholder="Admin password" name="admin_password"> <br><br>
        <button name="submit">Login</button>
    </form>
</body>
</html>
<?php

include('conn.php');
$admin_name='Iraguha';
$admin_password='dot2024';
$_POST['admin_name']= $admin_name;
$_POST['admin_password']= $admin_password;
if ($admin_password !='dot2024') {
    # code...
    echo "<script>alert('wrong credentials')</script>";
}


?>