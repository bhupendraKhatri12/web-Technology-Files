<?php

$server= "localhost";
$username = "root";
$password = "";
$database = "lab3";

$con = mysqli_connect($server, $username, $password, $database);

if(!$con){
    die("Connection to this database failed due to" .mysqli_connect_error());
}

echo"Connection to your database is successful.";


?>