

<?php

$server= "localhost";
$username = "root";
$password = "";
$db = "sarita2";


$con = mysqli_connect($server, $username, $password, $db);

if(!$con){
    die("Connection to this database failed due to" .mysqli_connect_error());
}

echo"Connection to your database is successful.";
echo"<br>";

//Creating a table
$sql= "CREATE TABLE `sarita2`.`bca_lab3` ( `name` VARCHAR(16) NOT NULL , `email` VARCHAR(16) NOT NULL )";

$result= mysqli_query($con, $sql);

//Check if table is created or not

if($result){
    echo"The table is created successfully";
}
else{
echo " The  table is not created because of this error-->". mysqli_error($con);
}






?>