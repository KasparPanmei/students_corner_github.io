<?php
  require_once "email_connect.php";
  error_reporting(0);
  $msg = "";
  extract($_POST);
  if(isset($submit))
  {
    // Get image from Post Data
    $image  = $_FILES['file'];
    // Image Name
    $image_name=$image['name'];
    // Temporary file path
    $image_tmp_name=$image['tmp_name']; 
    // Folder path where Image is Saved 
    $destination="image/".$image_name; 
    //this is a function that are used to store the file in the destination path.
    move_uploaded_file($image_tmp_name , $destination); 

    // signature
    // Get image from Post Data
    $sign_image  = $_FILES['sign'];
    // Image Name
    $sign_image_name= $sign_image['name'];
    // Temporary file path
    $sign_image_tmp_name=$sign_image['tmp_name']; 
    // Folder path where Image is Saved 
    $destination="sign_folder/".$sign_image_name; 
    //this is a function that are used to store the file in the destination path.
    move_uploaded_file($sign_image_tmp_name , $destination); 


    // SQL queries
    $sql = "INSERT INTO `student_details`(file, name, date, fname, mname, sign, mtu_email, regno, batch, aadhar, category, phone,email,course,branch,sem,password) VALUES ('$file','$name','$date','$fname','$mname','$sign', '$mtu_email','$regno','$batch','$aadhar','$category', '$phone', '$email','$course','$branch','$sem','$password')";
    
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
    <title>Register</title>
    <link rel="icon" type="png" href="1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      *
{
    margin: 0%;
    padding: 0%;
}
body
{
    background: linear-gradient(to right, rgb(48, 45, 45),rgb(105, 121, 122));
}
header .head
{
    text-align: center;
    margin: 50px 0 0  0;
}
header .head h1
{
    font-weight: bolder;
    letter-spacing: 2px;
    text-transform: uppercase;
    background-image: linear-gradient(-255deg,#180608 0%,
    #ff1100 29%,#0084ff 67%,#ec1bdb 100%);
    background-size: auto auto;
    background-clip: border-box;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-fill-color: transparent;
    animation: scale 1s infinite linear;
}
header .center
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 50px 0 0 0;
    color: white;
}
header .center .flex
{
    display: flex;
    justify-content: space-evenly;
    gap: 20px;
    border: 1px solidrgb(51, 49, 49);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgb(210, 210, 210);
    background-color: rgb(54, 53, 51);
}
@media (max-width:1036.98px) 
{
    header .center
    {
        margin: 50px 0 50px 0;
    }
}
@media (max-width:500.98px) 
{
    header .center .flex
    {
        display: block;
    }
}
    </style>
</head>
<body>
   <header>
    <div class="head">
        <h1>Registration</h1>
    </div>
    <div class="center">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="flex">
                <div class="f-col-flex">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Passport</label>
                        <input type="file" class="form-control" id="" aria-describedby="" name="file" accept="image/*" required>
                      </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name</label>
                          <input type="text" class="form-control" id="" aria-describedby="" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">D.O.B</label>
                          <input type="date" class="form-control" id="" aria-describedby="" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Father Name</label>
                            <input type="text" class="form-control" id="" aria-describedby="" name="fname" placeholder="Enter your Father Name" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mother Name</label>
                            <input type="text" class="form-control" id="" aria-describedby="" name="mname" placeholder="Enter your Mother Name" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Signature</label>
                            <input type="file" class="form-control" id="" aria-describedby="" name="sign" required>
                          </div>
                </div>
                <div class="t-col-flex">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">MTU-Email</label>
                        <input type="email" class="form-control" id="" aria-describedby="" name="mtu_email" placeholder="example@mtu.ac.in" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Regd. No</label>
                        <input type="text" class="form-control" id="" aria-describedby="" name="regno" placeholder="Enter your regno" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Batch</label>
                        <input type="text" class="form-control" id="" aria-describedby="" name="batch" placeholder="Year Joining (2020-2021)" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Aadhar Number</label>
                        <input type="text" class="form-control" id="" aria-describedby="" name="aadhar" placeholder="Enter your aadhar" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Select Category</label>
                        <select class="form-select" aria-label="Default select example"  name="category"required>
                        <option selected>Category</option>
                        <option value="ST">ST</option>
                        <option value="SC">SC</option>
                        <option value="OBC">OBC</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="" aria-describedby="" name="password" placeholder="Enter your password" required>
                      </div>
                </div>
                <div class="s-col-flex">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contact No.</label>
                        <input type="text" class="form-control" id="" aria-describedby="" name="phone" placeholder="Enter your phone no" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="" aria-describedby="" name="email" placeholder="example@gmail.com" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Course</label>
                        <input type="text" class="form-control" id="" aria-describedby="" name="course" placeholder="Course" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Branch</label>
                        <select class="form-select" aria-label="Default select example" name="branch" required>
                        <option selected>Branch</option>
                        <option value="CSE">CSE</option>
                        <option value="EE">EE</option>
                        <option value="ECE">ECE</option>
                        <option value="ME">ME</option>
                        <option value="CE">CE</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Current Semester</label>
                        <select class="form-select" aria-label="Default select example" name="sem" required>
                        <option selected>Sem</option>
                        <option value="1st">1<sup>st</sup></option>
                        <option value="2nd">2<sup>nd</sup></option>
                        <option value="3rd">3<sup>rd</sup></option>
                        <option value="4th">4<sup>th</sup></option>
                        <option value="5th">5<sup>th</sup></option>
                        <option value="6th">6<sup>th</sup></option>
                        <option value="7th">7<sup>th</sup></option>
                        <option value="8th">8<sup>th</sup></option>
                        </select>
                      </div>
                      <br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
   </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>