<?php
include 'config/db.php';

if(isset($_POST['submit'])){
  $name =stripslashes($_POST['name']);
  $name = mysqli_real_escape_string($conn, $name);
  $email = stripslashes($_POST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  $password = stripslashes($_POST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  $phone = stripslashes($_POST['phone']);
  $phone = mysqli_real_escape_string($conn, $phone);
  $father_name =stripslashes($_POST['father_name']);
  $father_name = mysqli_real_escape_string($conn, $father_name);
  $mother_name =stripslashes($_POST['mother_name']);
  $mother_name = mysqli_real_escape_string($conn, $mother_name);
  $parmaddress = stripslashes($_POST['parmaddress']);
  $parmaddress = mysqli_real_escape_string($conn, $parmaddress);
  $date = stripslashes($_POST['date']);
  $date = mysqli_real_escape_string($conn, $date);
  $nid_Birth = stripslashes($_POST['nid_Birth']);
  $nid_Birth = mysqli_real_escape_string($conn, $nid_Birth);
  $blood = stripslashes($_POST['blood']);
  $blood = mysqli_real_escape_string($conn, $blood);
  $profession = stripslashes($_POST['profession']);
  $profession = mysqli_real_escape_string($conn, $profession);
  $nationality = stripslashes($_POST['nationality']);
  $nationality = mysqli_real_escape_string($conn, $nationality);

  //create query

  $query = "INSERT INTO member (name, email, password, phone, father_name, mother_name, parmaddress, date, nid_Birth, blood, profession, nationality) VALUES ('$name', '$email', '$password', '$phone', '$father_name', '$mother_name', '$parmaddress', '$date', '$nid_Birth', '$blood', '$profession', '$nationality') ";

  $result = mysqli_query($conn, $query);

  if(($result)){
    header('Location: login.php');
  }else {
    echo "Something went wrong";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css
">
<style>
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info fixed-top p-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html"><img src="img/main-logo.png" class="main_logos" alt="">AS-SIRAT FOUNDATION </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="container-fluid bg-success p-2 bs-bg-opacity: .5">
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5 p-3">
                <div class="card-header bg-info">
                    <h4><div class="card-title">Registration Form</div></h4>
                </div>
                <div class="body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="">Member Name</label>
                            <input type="text" name="name" placeholder="Input your Full name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" placeholder="Write your Email" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="">password</label>
                            <input type="password" name="password" placeholder="Write your password" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="">Mobile number</label>
                            <input type="text" name="phone" placeholder="Type your Mobile number" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Father's Name</label>
                            <input type="text" name="father_name" placeholder="Write Your Father's name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Mother's Name</label>
                            <input type="text" name="mother_name" placeholder="Write Your Mother's name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">parmanent Address</label>
                            <input type="text" name="parmaddress" placeholder="parmanent Address" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Date of Birth</label>
                            <input type="date" name="date" placeholder="Write Your Mother's name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">nation Id/Birth id No.</label>
                            <input type="text" name="nid_Birth" placeholder="NID Or Birth Certificate" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            
                            <select name="blood" id="" class="form-control">
                                <option value="">SELECT YOUR BLOOD GROUP</option>
                                <option value="">A+</option>
                                <option value="">A-</option>
                                <option value="">AB+</option>
                                <option value="">AB-</option>
                                <option value="">B+</option>
                                <option value="">B-</option>
                                <option value="">o+</option>
                                <option value="">O-</option>
                                
                            </select>
                            <div class="mb-3">
                              <label for="">Profession</label><br>
                              <select name="profession" id="" class="form-control"> 
                              <option value="p">Select Your Profession</option>
                                <option value="p">Businessman</option>
                                <option value="p">Student</option>
                                <option value="p">Service holder</option>
                                <option value="p">Driver</option>
                                <option value="p">Others</option>
                              </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">Nationality</label>
                            <select name="nationality" id="" class="form-control"> 
                                <option value="n">Bangladeshi</option>
                              </select>  
                        </div>
                        <div class="mb-3">
                          <input type="submit" name="submit" value="register" class="btn btn-success form-control">
                        </div>
                        <div class="mb-3 text-danger text-center">
                          <h4 class="">Commitment</h4>
                        </div>
                        <div class="mb-3 bg-light text-gray">
                          <p>I hereby declare that the information furnished above is true, complete 
                          and correct to the best of my knowledge and belief. I understand that in the event of my information 
                          being found false or incorrect at any stage, my  appointment shall be liable to 
                          cancellation without notice or any compensation in lieu thereof.</p>
                          <p class="float-end">........................</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>