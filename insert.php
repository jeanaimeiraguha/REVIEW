<?php

include('conn.php');

if (isset($_POST['submit'])) {
    # code...
    $User_name=$_POST['User_name'];
    $User_Address=$_POST['User_Address'];
    $User_Phone=$_POST['User_Phone'];
   // $User_Phone=$_POST['User_Phone'];
   $insert = mysqli_query($conn , "INSERT INTO users VALUES('' , '$User_name' , '$User_Address' , '$User_Phone')");

   if ($insert) {
    # code...
header('location:select.php');
   }
   else{
    echo "something went wrong";
   }

}



?>