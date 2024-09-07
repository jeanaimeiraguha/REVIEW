<?php

include('conn.php');
$User_id = $_GET['User_id'];

$delete= mysqli_query($conn , "DELETE FROM users WHERE User_id= '$User_id'");

if ($delete) {
    # code...
    header('location:select.php');
}
else{
    echo "something went wrong";
}
?>