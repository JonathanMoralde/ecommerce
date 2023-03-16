<?php 
    $servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="ecommerce";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

    if(!$conn){
       die(mysqli_error($conn));
    }

session_start();
include_once ("sql_utilities.php");

