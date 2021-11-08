<?php

$server = "localhost";
$user_name = "root";
$password = "";
$db = "loginapp";

$conn = mysqli_connect($server,$user_name,$password,$db);
if (!$conn) 
{
    die("Database Connection Error : ".mysqli_connect_error() );
}
?>