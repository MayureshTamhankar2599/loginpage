<?php

include 'partials/_dbconnect.php';

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("location: login.php");
exit;
}


$sql = "SELECT * FROM empdetails";
$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>View data - <?php $_SESSION['username'] ?></title>
  </head>
  <body>
    
  <?php require 'partials/_nav.php' ?>

  <!-- <?php echo $_SESSION['username'] ?> -->

    <h2 style="display:flex;flex-direction:column;align-items:center;">Employee Details<br> </h2>


  <div class="container" style="display:flex;flex-direction:column;align-items:center;">
    

    
  <table class="table table-striped table-bordered">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col"><span class="required">*</span>Name</th>
      <th scope="col">Age</th>
      <th scope="col">Department</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
           
         while($row = mysqli_fetch_assoc($result))
         {
        ?>
 
           <td><?php echo $row['name'] ?></td>
           <td><?php echo $row['age'] ?></td>
           <td><?php echo $row['department'] ?></td>
           <td><?php echo $row['address'] ?></td>

     </tr>
       <?php 
         }

      ?>
   

  </tbody>
</table>
    




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

    
