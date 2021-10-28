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


// Inserting Data into table test1

$sql= "INSERT INTO `test1` (`name`, `email`) VALUES ('Sita', 'sita@sita.com')";

$result = mysqli_query($con, $sql);


//Check if the data  is inserted successfully

if($result){
    echo"The data is inserted successfully";
}
else{
echo " The  data is not inserted because of this error-->". mysqli_error($con);
}

/*
// Selecting Data from the table
 $sql="SELECT * FROM `test1`";
$result= mysqli_query($con, $sql);

//Find the number of rows returned
$num=  mysqli_num_rows($result);
echo $num;
echo "<br>";

//Displaying the rows returned by the sql
if($num>0){
// $row = mysqli_fetch_assoc($result);
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";   
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>"; 
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>"; 
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>"; 
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>"; 
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>"; 

while($row=mysqli_fetch_assoc($result)){
    //echo var_dump($row);
    //displaying string
    echo "Hello " .$row['name']."! " ."Your email id is:".$row['email'];
    echo "<br>";
}
}
*/


?>