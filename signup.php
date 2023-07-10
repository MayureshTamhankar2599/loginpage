<?php
 $showAlert = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

   
    include 'partials/_dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // $exists=false;

    // check wheather this username exists
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistsrows = mysqli_num_rows($result);   // this function is to check how many rows are there.


    if($numExistsrows > 0){
    // $exists = true;
    $showError  = "Username already exists.";
    }
    else{
        // $exists = false;
   
    if(($password == $cpassword)){

$sql = "INSERT INTO `users` ( `username`, `password`, `date`) VALUES ('$username', '$password', '2023-07-09 12:54:18.000000')";
$result = mysqli_query($conn, $sql);

if($result){

    $showAlert  = true;

}
    }
    else{

        $showError  = "Password doesn't match.";

    }
}
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

    <title>signup</title>
  </head>
  <body>
    
  <?php require 'partials/_nav.php' ?>

  <?php
if($showAlert){


  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Your account is successfully created. Login now..
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div> ';

}
if( $showError){


    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error</strong>  '.  $showError.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div> ';
  
  }

?>

<div class="container" style="max-width:500px;margin: auto;padding: 36px 48px 48px 48px;background-color: #f9f9f9;border-radius: 11px;box-shadow: 1rem 1.4rem 0.8rem rgba(0, 64, 255, 0.11);margin-top: 50px;">
<div class="h2" style="display:flex;flex-direction:column;align-items:center;">Register here</div>

  <br>

    <form action="/loginpage/signup.php" method="post">

  <div class="col-md-12">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>

  <div class="col-md-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="col-md-12">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">*Please put same password</div>
  </div>
<br>
  <button type="submit" class="btn btn-primary col-md-12">SignUp</button>
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

    
