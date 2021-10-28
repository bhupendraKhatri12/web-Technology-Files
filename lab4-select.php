<?php



$username = "root";
$password = "";
$database = "bca-sem3";
$server = "localhost";

//Connnecting to the Database
$con = mysqli_connect($server,$username,$password,$database);


if(!$con)
{
    die("Connection to the database is unsuccessful ".mysqli_connect_error());
}


else{

    echo("Connection to the database is Successful");
    echo("<br>");
}
    
    

//Selection query 
$sql = "SELECT * FROM `test`";
$result= mysqli_query($con,$sql);

//Check if data is selected 

if($result)
{
    echo("Succesfully Connected");
}
else 
{
    echo("Error selecting Due to => ".mysqli_error($con));
}

//Find the number of rows returned
$sql = "INSERT INTO test (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}


$del  = "DROP TABLE New2";
$result= mysqli_query($del ,$sql);




if (!$result) {
    echo "Table Deleterd  successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }


$con->close();





           

?>