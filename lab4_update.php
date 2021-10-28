<?php

//Connecting to your database
$server= "localhost";
$username = "root";
$password = "";
$database = "sarita";

$con = mysqli_connect($server, $username, $password, $database);

if(!$con){
    die("Connection to this database failed due to" .mysqli_connect_error());
}

echo"Connection to your database is successful.";


//Update Query

$sql = "UPDATE `testtable` SET age = '40' WHERE sno = 3";

 $result = mysqli_query($con, $sql);

 if($result){
     echo"The record has been updated successfully.";
 }
 else{
     echo"The reocrd has not been updated due to-->".mysqli_error($con);
 }




?>