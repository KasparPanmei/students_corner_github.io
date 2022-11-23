<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "project";

    // database connection
    $con = mysqli_connect($server, $username, $password, $db);
    if($con)
    {
        echo "";
    }
    else
    {
        echo "error in connection";
    }
?>