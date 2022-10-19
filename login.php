<?php
include 'config/db.php';

session_start();

if(isset($_POST['name'])){
 $name = stripslashes($_POST['name']);
 $password = stripslashes($_POST['password']);

 $query = "SELECT * FROM member WHERE name = '$name' and password = '$password'";

 $result = mysqli_query($conn, $query);
 $rows = mysqli_num_rows($result);

 if($rows === 1){
  $_SESSION['name'] = $name;
  header('Location: index.php');
 }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css
">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/main-logo.png" class="main_logos" alt="">AS-SIRAT FOUNDATION </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Login </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="conatainer">
  <div class="row mt-5 justify-content-center">
    <div class="col-lg-6">
      <div class="card mt-5">
        <div class="card-header bg-success">
          <h3 class="card-title">Login Form</h3>
        </div>
        <div class="card-body p-5">
          <form action="" method="POST">
            <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
            <label for="">password</label>
            <input type="text" name="password" class="form-control">
            </div>
            <div class="mb-3">
            <input type="submit" name="submit" value="Log in" class=" btn btn-success form-control">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>