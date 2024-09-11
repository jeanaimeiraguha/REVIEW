<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
</head>
<body>
  <form action="insert.php" method="post" class="form was-validated container  mt-5">

    <input type="text" name="User_name" required class="form-control mb-3 mx-0"  placeholder="User_name"> 
    <div class="invalid-feedback">Please fill these fields</div>
    <input type="text" name="User_Address" required class="form-control mb-3" placeholder="User_Address"> 
  <input type="text" name="User_Phone" required class="form-control mb-3" placeholder="   User_Phone"> 
    <div class="invalid-feedback">Please fill this field with digit</div>
    <br>
    <input type="submit" name="submit" class="btn btn-success">

  </form>  
</body>
</html>