<form action="" method="post">
User_name <input type="text" name="User_name">
User_Address <input type="text" name="User_Address">
User_Phone <input type="text" name="Use_phone">
<button name="submit">Login</button>
</form>
<?php
include('conn.php');
session_start();
if(isset($_POST['submit'])) {
    # code...
    $User_name=$_POST['User_name'];
    $User_Address=$_POST['User_Address'];
    $User_Phone=$_POST['User_Phone'];
}
?>