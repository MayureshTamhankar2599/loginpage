<?php

include 'partials/_dbconnect.php';

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("location: login.php");
exit;
}

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $department = $_POST['department'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `empdetails` (`name`, `age`, `department`, `address`) VALUES ('$name', '$age', '$department', '$address')";

    if(mysqli_query($conn,  $sql))
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success</strong> Details submited successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

      

   }
    else{
        echo "Error:" . mysqli_connect_error($conn);
    }
    mysqli_close($conn);
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username'] ?></title>
  </head>
  <body>
    
  <?php require 'partials/_nav.php' ?>

  <!-- <?php echo $_SESSION['username'] ?> -->

 <h4> Welcome : <?php echo $_SESSION['username'] ?> </h4>
  Please fill employee details form.

  <br>
  <br>
  <br>

  <div class="container " style="width:auto;max-width: 600px;margin: auto;padding: 36px 48px 48px 48px;background-color: #f9f9f9;border-radius: 11px;box-shadow: 1rem 1.4rem 0.8rem rgba(0, 64, 255, 0.11);margin-top: 10px;">
<div class="h2" style="display:flex;flex-direction:column;align-items:center;">Employee Details form</div>

    

    <!-- <form action="/loginpage/signup.php" method="post"> -->

    <form action="#" method="post">

  <div class="col-md-12">
    <label for="name" class="form-label" require><span class="required" style="color:red;">*</span>Name</label>
    <input type="text" class="form-control" id="name" name="name"  aria-describedby="inputGroupPrepend2"  required>
  </div>

  <div class="col-md-12">
    <label for="age" class="form-label"><span class="required" style="color:red;">*</span>Age</label>
    <input type="text" class="form-control" id="age" name="age"  aria-describedby="inputGroupPrepend2"  required>
  </div>

  <div class="col-md-12">
    <label for="department" class="form-label"><span class="required" style="color:red;">*</span>Department</label>
    <input type="text" class="form-control" id="department" name="department"  aria-describedby="inputGroupPrepend2"  required>
  </div>

  <div class="col-md-12">
    <label for="address" class="form-label" ><span class="required" style="color:red;">*</span>Address</label>
    <input type="text" class="form-control" id="address" name="address"  aria-describedby="inputGroupPrepend2"  required>
    <div id="city" class="form-text">*Please mention your current address</div>



  </div>

<br>

  <button type="submit" name="submit" class="btn btn-primary col-md-12">Submit</button>
</form>

  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

    
