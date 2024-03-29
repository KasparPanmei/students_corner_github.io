<?php

session_start();
require_once "email_connect.php";
extract($_POST);
if(isset($_POST['login']))
  {
    // $regno = mysqli_real_escape_string($con, $_POST['regno']);
    // $password = mysqli_real_escape_string($con, $_POST['password']);
    $select = "SELECT *FROM student_details WHERE regno = '$regno' AND password = '$password'";
    $result = mysqli_query($con, $select);
    if(mysqli_num_rows($result)>0)
    {
      $row =  mysqli_fetch_assoc($result);
      $_SESSION['user_id']= $row['id'];
      header('location:landing_page.php');
    }
    else
    {
      echo  '<script> alert("Incorrect Regno or Password")</script>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Manipur_Technical_University_logo.png" type="image/x-icon">
    <title>MTU student portal</title>
    <style>

      *
      {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      }
      ::selection
      {
        background-color: rebeccapurple;
      }
        html{
            height: 100%;
        }
        body{
            max-width: 1400px;
            margin: 0 auto;
            padding: 0;
            font-family: sans-serif;
            background-image:linear-gradient(#141e30, #243b55);
        }
        .login-box img{
            width: 105%;
            padding-right: 10px;
            border-radius: 5px;
        }
        .login-box{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            height: 500px;
            padding: 40px;
            transform: translate(-50%,-50%);
            background: rgba(0,0,0,.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
        }

        .login-box h5{
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: left;
            text-transform: uppercase;
            font-weight: lighter;
            font-family: Arial, Helvetica, sans-serif;
            text-shadow: 0.01rem 0.01rem 1rem;
        }
        .login-box .user-box{
            position: relative;
        }
        .login-box .user-box input{
            width: 100%;
            padding: 4px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .login-box .user-box label{
            /* position: absolute; */
            top: 0;
            left: 0;
            color: rgb(201, 197, 197);
            padding: 10px 0;
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }
        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label 
        {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }
        .login-box form a{
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 2px;
        }
        .login-box a:hover{
            background-color: #264c4e;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 3px #48a2a7, 0 0 6px  #48a2a7, 0 0 9px  #48a2a7, 0 0 12px  #48a2a7;

        }
        .login-box a span {
          position: absolute;
          display: block;
        }
        .login-box a span:nth-child(1) {
          top: 0;
          left: -100%;
          width: 100%;
          height: 2px;
          background: linear-gradient(90deg, transparent, #03e9f4);
          animation: btn-anim1 1s linear infinite;
        }
        @keyframes btn-anim1 {
            0%{
                left: -100%;
            }
            50%,100%{
                left: 100%;
            }
          }
          
        .login-box a span:nth-child(2) {
          top: -100%;
          right: 0;
          width: 2px;
          height: 100%;
          background: linear-gradient(180deg, transparent, #03e9f4);
          animation: btn-anim2 1s linear infinite;
          animation-delay: .25s
        }
        @keyframes btn-anim2 {
          0% {
            top: -100%;
          }
          50%,100% {
            top: 100%;
          }
        }
        .login-box a span:nth-child(3) {
          bottom: 0;
          right: -100%;
          width: 100%;
          height: 2px;
          background: linear-gradient(270deg, transparent, #03e9f4);
          animation: btn-anim3 1s linear infinite;
          animation-delay: .5s
        }

        @keyframes btn-anim3 {
          0% {
            right: -100%;
          }
          50%,100% {
            right: 100%;
          }
        }

        .login-box a span:nth-child(4) {
          bottom: -100%;
          left: 0;
          width: 2px;
          height: 100%;
          background: linear-gradient(360deg, transparent, #03e9f4);
          animation: btn-anim4 1s linear infinite;
          animation-delay: .75s
        }
        .btn
        {
          border: 0.1px solid rgb(15, 24, 36);
          background-color: rgb(96, 123, 158);
          padding: 10px 20px;
          font-size: 15px;
          color: white;
          border-radius: 8px;
          text-transform: uppercase;
          cursor: pointer;
        }
        @keyframes btn-anim4 {
          0% {
            bottom: -100%;
          }
          50%,100% {
            bottom: 100%;
          }
        }


        @media (max-width :406.98px)
        {
          .login-box
          {
            width: 300px;
          }
        }
        @media (max-width :316.98px)
        {
          .login-box
          {
            width: 250px;
          }
          .login-box img
          {
            width: 150px;
            
            padding-right: 10px;
            border-radius: 5px;
          }
        }
        @media (max-width :253.98px)
        {
          .login-box
          {
            width: 200px;
          }
          .login-box img
          {
            width: 100px;

            padding-right: 10px;
            border-radius: 5px;
          }
        }
    </style>
</head>
<body>
    <div class="login-box">
       <img src="./logo_4230.webp"> <br><br>
        <h5>Login to students portal</h5>
        <form action="" method="post">
            <div class="user-box">
                <!-- <label >Username</label> -->
                <input type="text" name="regno" id="" placeholder="Your Reg.no.">
            </div>
            <div class="user-box">
                <!-- <label >Password</label> -->
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <button type="submit" name="login" class="btn btn-primary">
              Login
            </button>
        </form>
    </div>
</body>
</html>