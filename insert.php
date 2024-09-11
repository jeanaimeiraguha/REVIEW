<?php

include('conn.php');

if (isset($_POST['submit'])) {
    # code...
    $User_name=$_POST['User_name'];
    $User_Address=$_POST['User_Address'];
    $User_Phone=$_POST['User_Phone'];
   // $User_Phone=$_POST['User_Phone'];
   if (empty($User_name) || empty($User_Address)  || empty($User_Phone)) {
    # code...
    echo "<script>alert('Plz fill this field')</script>";
   }
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