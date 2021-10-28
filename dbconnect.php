<?php

$server = "localhost";
$username = "root";
$password = "";
$db ="bca-sem3";



$con = mysqli_connect($server,$username,$password,$db);



if(!$con)
{
    die("Connedction to the database is failed dui to ".mysqli_connect_error());

}
echo"Database is connected Succesfully";

echo  "<br>";

//create  a database "bca"

$sql = " CREATE TABLE `bca` (`name` VARCHAR(16) NOT NULL, `email` VARCHAR(16) NOT NULL) ";
$result = mysqli_query($con,$sql);


// Check database is created or not






if($result)
{
    echo "Table created successfully";

}

else {
    echo "Error creating table: " . mysqli_error($con);
  }






?>