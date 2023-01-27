<?php

require_once "email_connect.php";
extract($_POST);
if(isset($submit))
{
  $sql = "INSERT INTO `student_details`(name, branch, regno, password, email, phone, sentence) VALUES ('$name', '$branch', '$regno', '$password', '$email', '$phone', '$sentence')";
  if($con->query($sql)==TRUE)
  {
    echo '<script> alert("Registered Successfully!")</script>';
  }
  else
  {
    echo '<script>alert("Failed!")</script>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./register.css">
    <link rel="icon" href="./1.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a class="navbar-brand" href="./index.php">
                    <img src="./navbar-2-logo.png" alt="" style="width: 200px;">
                  </a>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                      
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a  href="#student-corner" class="nav-link">Student's</a>
                          </li>
                          <li class="nav-item">
                            <a href="#teacher-corner" class="nav-link">Teacher's</a>
                          </li>
                          <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                          </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </nav>
    </header>
    <section class="bg-color">
            <div class="container" style="width: 500px;">
                <div class="forms">
                    <div class="register">
                        <h3><b>Register</b></h3>
                    </div>
                    <form action="" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full_Name" name="name" required>
                          <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Branch</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="branch" required>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Registration No.</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="regno" required>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="exampleInputPassword1" name="email" required>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Phone No.</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="phone" required>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Sentence Movitation</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="sentence" required>
                        </div>
                        <div class="submit">
                            <button class="btn btn-primary" name="submit">Submit</button>
                        </div>
                      <p>&copy;2022. High Tech All Rights Reserved.</p>
                </div>
            </div>
    </section>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>