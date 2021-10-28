<?php

$server= "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("Connection to this database failed due to" .mysqli_connect_error());
}

echo"Connection to your database is successful.";
echo"<br>";

//Creating a database "Sarita2"

$sql = "CREATE DATABASE Sarita2 ";

$result = mysqli_query($con, $sql);

//Check if database is created or not

if($result){
    echo"The database is created successfully";
}
else{
echo " The database was not created because of this error-->". mysqli_error($con);
}


?>