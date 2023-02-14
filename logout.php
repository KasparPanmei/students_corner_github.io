<?php
session_start();
session_unset();
session_destroy();
ob_start();
header("location:./2.Mtu_user_login.php");
ob_end_flush();
include_once "./2.Mtu_user_login.php";
exit();
?>