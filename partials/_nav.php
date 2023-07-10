<?php 
// $loggedin='';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

    
    $loggedin= true;
}else{
    $loggedin= false;
}

echo '<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/loginpage" style="font-size: 30px;"> Bharat Energy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/loginpage/welcome.php">Home <span class="sr-only"></span></a>
        </li>';

        if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/loginpage/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/loginpage/signup.php">Signup</a>
        </li>';
        }

        if($loggedin){
        echo'<li class="nav-item">
              <a class="nav-link" href="/loginpage/list.php">View</a>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="/loginpage/logout.php">Logout</a>
        </li>
';
        }

     echo '</ul>
    </div>
  </div>
</nav>';
?>