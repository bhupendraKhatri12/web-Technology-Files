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



//Delete a table

$sql = "DROP TABLE `mytable1` ";

 $result = mysqli_query($con, $sql);

 if($result){
     echo"The table has been deleted successfully.";
 }
 else{
     echo"The table has not been deleted due to-->".mysqli_error($con);
 }


?>