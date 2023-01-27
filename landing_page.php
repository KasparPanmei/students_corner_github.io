<?php

    include 'email_connect.php';
    session_start();
    $user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="icon" href="./1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <style>
        *
        {
            margin: 0%;
            padding: 0%;
            font-family: 'Unbounded', cursive;
        }
        body
        {
            background: linear-gradient(90deg,rgb(20, 100, 247),rgb(98, 149, 244));
        }
        header
        {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        header span h1
        {
            margin: 90px 0 30px 0;
        }
        header span .animate
        {
            background-image: linear-gradient(-255deg,#231557 0%,
            #44107a 29%,#ff1361 67%,#fff800 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-fill-color:transparent;
        }
        header .Display
        {
            line-height: 50px;
            font-size: 22px;
            text-align:center;
        }
        header .Display h4 .name
        {
            text-transform: uppercase;
        }
        section .fetch_details
        {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            line-height: 80px;
            color: white;
        }
        section .fetch_details .email,.branch,.password,.regno,.phone,.sentence
        {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
        }
        @media (max-width:600.98px)
        {
            section .fetch_details
            {
                font-size :15px;
                line-height: 50px;
            }
        }
        @media (max-width:454.98px)
        {
            section .fetch_details
            {
                font-size :12px;
                line-height: 40px;
            }
            header .Display
            {
                font-size: 18px;
            }
        }
        @media (max-width:454.98px)
        {
            section .fetch_details
            {
                font-size : 10px;
                line-height: 40px;
            }
            header .Display
            {
                font-size: 14px;
            }
        }
        @media (max-width:299.98px)
        {
            section .fetch_details .email,.branch,.password,.regno,.phone,.sentence
            {
                gap: 10px;
            }
            section .fetch_details
            {
                font-size : 10px;
                line-height: 40px;
            }
            header .Display
            {
                font-size: 14px;
            }
        }
        
    </style>
</head>
<body>
    <header>
        <?php
            $select = mysqli_query($con, "SELECT *FROM `student_details` WHERE id = '$user_id'") or die('Query Failed');
            if(mysqli_num_rows($select) > 0)
            {
                $fetch = mysqli_fetch_assoc($select);
            }
        ?>
        <span><h1 style="color: white;" class="animate">WELCOME</h1></span>
        <div class="Display">
            <h4><span>My Name is </span>
                <span style="color:blue;" class="name">
                    <?php
                            echo $fetch['name']
                    ?>
                </span>
                <br>
                <span>
                    And This is My details
                </span>
            </h4>
        </div>
    </header>
    <section>
        <?php
            $select = mysqli_query($con, "SELECT *FROM `student_details` WHERE id = '$user_id'") or die('Query Failed');
            if(mysqli_num_rows($select) > 0)
            {
                $fetch = mysqli_fetch_assoc($select);
            }
        ?>
        <div class="fetch_details">
            <div class="small-details">
                <div class="email">
                    <span>Email </span>
                    <span>
                       <a href="mailto:" style="color:white;">
                        <?php 
                            echo $fetch['email']
                        ?>
                       </a>
                    </span>
                </div>
                <div class="branch">
                    <span>Branch </span>
                    <span>
                        <?php 

                            echo $fetch['branch']

                        ?>
                    </span>
                </div>
                <div class="password">
                    <span>Password </span>
                    <span>
                        <?php 

                            echo $fetch['password']

                        ?>
                    </span>
                </div>
                <div class="regno">
                    <span>Regd. No </span>
                    <span>
                        <?php 

                            echo $fetch['regno']

                        ?>
                    </span>
                </div>
                <div class="phone">
                    <span>Phone </span>
                    <span>
                        <?php 

                            echo $fetch['phone']

                        ?>
                    </span>
                </div>
                <div class="sentence">
                    <span>Sentence </span>
                    <span>
                        <?php 

                            echo $fetch['sentence']

                        ?>
                    </span>
                </div>
            </div>
        </div>
    </section>
</body>
</html>