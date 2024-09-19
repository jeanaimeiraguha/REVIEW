<form action="" method="post">
    User_name: <input type="text" name="User_name"> <br>
    User_Address: <input type="text" name="User_Address"> <br>
    User_Phone: <input type="text" name="User_phone"> <br> <!-- Corrected input name -->
    <button name="submit">Login</button>
</form>

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
        header('Location: index.php');
    } else {
        echo "Wrong credentials";   
    }
}
?>
