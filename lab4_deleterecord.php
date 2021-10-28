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
echo "<br>";



//Delete a row/multiple rows

$sql = "DELETE from `testtable` WHERE age = 40";

 $result = mysqli_query($con, $sql);

 if($result){
     echo"The record has been deleted successfully.";
 }
 else{
     echo"The reocrd has not been deleted due to-->".mysqli_error($con);
 }


?>