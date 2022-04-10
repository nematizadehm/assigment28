<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];

if($username== "nematizadehm" && $password= "1379")
{
    $_SESSION["Login_status"]= true;
header(  " Location : admin-dashboard.php");
}
else
{
    header(  " Location : admin-login-process.php");
}
?>