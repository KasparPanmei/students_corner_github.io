<?php

include "email_connect.php";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
    <style>
        *
        {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        /* selection */
        ::selection
        {
            background-color:rgb(97, 137, 212);
        }
        /* scroll-bar */
        ::-webkit-scrollbar
        {
            width: 5px;
        }
        ::-webkit-scrollbar-track
        {
            background-color: #333;
            border-radius: 1px;
        }
        ::-webkit-scrollbar-thumb
        {
            background-color:rgb(97, 137, 212);
            border-radius: 50px;
        }
        body
        {
            background: linear-gradient(to right, rgb(188, 204, 95), rgb(122, 236, 231));
            background-repeat: no-repeat;
        }
        .container
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            text-align: center;
        }
        .container .fluid-container h2
        {
            font-weight: bolder;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            animation: head 1s infinite linear;
            color:rgb(97, 137, 212);
            text-shadow: 5px 5px 5px rgba(2, 2, 2, 0.596);
        }
        @keyframes head
        {
            0%
            {
                transform: scale(1.3);
            }
            50%
            {
                transform: scale(1.5);
            }
            100%
            {
                transform: scale(1.3);
            }
        }
        .container .fluid-container input
        {
            font-size: 25px;
            margin-top: 10px;
            background: linear-gradient(to right, rgb(188, 204, 95), rgb(122, 236, 231));
            border: 0.1px rgb(136, 247, 186);
            cursor: none;
        }
        .dis
        {
            display: grid;
            place-items: center;
            margin-top: 20px;
        }
        .dis .details
        {
            margin: 20px 0 60px 0 ;
            background-color: rgb(136, 247, 186);
            padding: 50px;
            border-radius: 5px;
            box-shadow: 1px 1px 5px black;
        }
        .dis .details .d-flex
        {
            display: flex;
            justify-content: left;
            align-items: center;
            font-size: 25px;
            font-weight: bolder;
            gap: 10px;
            line-height: 50px;
        }
        .dis .details .d-flex input
        {
            background-color: rgb(136, 247, 186);
            border: 0.1px rgb(136, 247, 186);
            cursor: none;
            font-size: small;
        }
        .dis .details .d-flex .flex-content
        {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        .dis .details .d-flex .anchor a
        {
            text-decoration: none;
        }
        .dis .details .d-flex .icons
        {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        .dis .details .d-flex .icons #whats svg
        {
            color: rgb(74, 197, 88);
        }
        .dis .details .d-flex .icons a svg:hover
        {
            animation: icons .6s linear;
        }
        @keyframes icons 
        {
            0%
            {
                transform: rotate(30deg);
            }
            100%
            {
                transform: rotate(360deg);
            } 
        }
        @media (max-width:630.98px)
        {
            .dis h5
            {
                font-size: 15px;
            }
            .dis .details
            {
                padding: 20px;
            }
            .dis .details .d-flex
            {
                font-size: 20px;
            }
        }
        @media (max-width:479.98px)
        {
            .dis .details
            {
                padding: 10px;
                margin: 60px;
            }
            .dis .details .d-flex
            {
                font-size: 15px;
            }
        }
        @media (max-width:452.98px)
        {
            .dis h5
            {
                font-size: 13px;
            }
            .dis .details .d-flex
            {
                font-size: 13px;
            }
            .dis .details .d-flex .icons svg
            {
                width: 20px !important;
            }
        }
        @media (max-width:414.98px)
        {
            .dis .details
            {
                margin: 60px 0 254px 0;
            }
        }
        @media (max-width:408.98px)
        {
            .dis h5
            {
                display: none;
            }
            .dis .details
            {
                padding: 10px;
                margin: 60px 0 80px 0;
            }
            .dis .details .d-flex
            {
                font-size: 15px;
            }
        }
        @media (max-width:345.98px)
        {
            .dis .details
            {
                padding: 10px;
                margin: 60px 0 60px 0;
            }
            .dis .details .d-flex
            {
                font-size: 10px;
            }
        }
    </style>
<body>
    <form action="" method="post">
        <div class="container">
            <?php
            $select = mysqli_query($con, "SELECT *FROM `student_details` WHERE id = '$user_id'") or die('query failed');
            if(mysqli_num_rows($select) >0 )
            {
                $fetch = mysqli_fetch_assoc($select);
            }
            ?>
            <div class="fluid-container">
                <h2><i>WELCOME</i></h2>
                <input type="text" readonly name= "name" value="
                <?php
                echo $fetch['name'];
                ?>">
            </div>
        </div>
        <div class="dis">
            <h5>
                This is Your User Interface and Your Details are shown below
            </h5>
            <div class="details">
                <div class="d-flex">
                    <div class="flex-content">
                        <div class="no1">
                        <label for="" >Name : </label>
                        </div>
                        <div class="no1">
                        <input type="text" readonly name="name"
                            value="
                            <?php
                                echo $fetch['name'];
                            ?>"
                        >
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="flex-content">
                            <div class="no1">
                            <label for="" >Brach : </label>
                            </div>
                            <div class="no1">
                            <input type="text" readonly name="branch"
                                value="
                                <?php
                                    echo $fetch['branch'];
                                ?>"
                            >
                            </div>
                        </div>
                </div>
                <div class="d-flex">
                    <div class="flex-content">
                            <div class="no1">
                            <label for="" >Email : </label>
                            </div>
                            <div class="no1">
                                <input type="text" readonly name="email"
                                    value="
                                    <?php
                                        echo $fetch['email'];
                                    ?>"
                                >
                            </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="flex-content">
                            <div class="no1">
                                <label for="" >Registration No : </label>
                            </div>
                            <div class="no1">
                                <input type="text" readonly name="regno"
                                    value="
                                        <?php
                                        echo $fetch['regno'];
                                        ?>"
                                >
                            </div>
                        </div>
                </div>
                <div class="d-flex">
                    <div class="flex-content">
                            <div class="no1">
                            <label for="" >Phone : </label>
                            </div>
                            <div class="no1">
                                <input type="text" readonly name="phone"
                                value="<?php
                                echo $fetch['phone'];
                                ?>"
                                >
                            </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="flex-content">
                            <div class="no1">
                            <label for="" >Sentence : </label>
                            </div>
                            <div class="no1">
                                <input type="text" readonly name="sentence"
                                value="
                                <?php
                                echo $fetch['sentence'];
                                ?>"
                                >
                            </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="icons">
                        <div class="whatsapp" id="whats">
                            <a href="https://wa.me/7982239573" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                  </svg>
                            </a>
                        </div>
                        <div class="facebook" id="face">
                            <a href="https://www.facebook.com/kaspar.panmei.7/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                  </svg>
                            </a>
                        </div>
                        <div class="twitter" id="tweet">
                            <a href="https://twitter.com/home" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                  </svg>
                            </a>
                        </div>
                    </div>
                    <label for="" name="links"></label>
                </div>
            </div>
        </div>
    </form>
</body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>