<?php

$server= "localhost";
$username = "root";
$password = "";
$database = "sarita";

//connecting to Database

$con = mysqli_connect($server, $username, $password, $database);

if(!$con){
    die("Connection to this database failed due to-->" .mysqli_connect_error());
}

echo"Connection to your database is successful.";
echo"<br>";

//Selection query

 $sql = "SELECT * FROM `testtable` WHERE age = 30";
 $result=  mysqli_query($con, $sql);

 //Check if data is selected or not
 if($result){
     echo"Successfully selected";
 }
 else{
    echo" Error in selecting due to -->" .mysqli_error($con);
 }

 //Find the number of rows returned
 $num=mysqli_num_rows($result);
  echo"<br>";
  echo $num;
  echo"<br>";

  if($num >0){
      //$row = mysqli_fetch_assoc($result);
      //echo var_dump($row);
      //echo "<br>";
       //while($row = mysqli_fetch_assoc($result)){
       //echo var_dump($row);
       //echo "<br>";

       //Display in the table

       echo "<table border =1>";
       echo"<tr>";
       echo "<th> S. No </th>";
       echo "<th> Name </th>";
       echo "<th> Age </th>";
       echo "<th> Gender </th>";
       while($row = mysqli_fetch_assoc($result)){
           echo "<tr>";
           echo "<td>".$row['sno']."</td>";
           echo "<td>".$row['name']."</td>";
           echo "<td>".$row['age']."</td>";
           echo "<td>".$row['gender']."</td>";
       }


      
  }



?>