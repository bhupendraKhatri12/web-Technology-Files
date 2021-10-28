<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab2</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
    <h2> Welcome to PHP second class! </h2>
    <p> Today we are going to learn about basics of php.</p>
    </div>
    <?php

    echo " I am from php code!";
    echo "<br>";

    echo " This is second line from php";
echo "<br>";

//This is a single line comment

/* This is 
Multi
line 
Comment */

/*
Data Types in PHP
1. String
2. Integer
3. Float
4. Boolean
5. Array
6. Object
*/


//1. String 

$var = "This is a string";
echo "<br>";
echo $var;
echo "<br>";
echo var_dump($var);

//2. Integer
 $var1 = 10 ;
 echo"<br>";
 echo "The value of Var1 is : ";
 echo $var1;
 echo "<br>";
 echo var_dump($var1);
 echo "<br>";
 $var2 = 5;

 echo "The addition of Var1 and Var2 is: ";
 echo $var1 + $var2;


 // Operators in PHP
 // 1. Arithmetic Operators (+, -, *, /)
  echo"<br>";
  echo "The subtraction of two variables Var1 and Var2 is: ";
  echo $var1-$var2;
  echo"<br>";
  echo "The addition of Var1 and Var2 is: ";
 echo $var1 + $var2;
 echo"<br>";
 echo "The multiplication of two variables Var1 and Var2 is: ";
  echo $var1*$var2;
  echo"<br>";
  echo "The division of Var1 and Var2 is: ";
 echo $var1 / $var2;
 echo"<br>";

 // 2. Assignment Operators

 $newvar = $var1;
 echo " The value of new variable is : ";
 echo $newvar;

 $newvar1 = 12;
 $newvar1 += $newvar1;

 echo"<br>";
 echo "The value of newvar1 is : ";
 echo $newvar1;

 //3. Increment/ decrement Operators
 //a++
 //a--
 //--a
 //++a
 //$var1 = 10
 // $var2 = 5

 echo"<br>";
 echo $var1++; //It will display 10 and then increase by 1.
 echo"<br>";
 echo $var1; // It will display 11
 echo"<br>";
echo ++$var1; // it will display 12
echo"<br>";
echo --$var1;// It will diplay 11
echo"<br>";
echo $var1--; //It will display 11
echo"<br>";
echo $var1; //It will display 10
echo"<br>";

//4. Comparison Operators (>, <, >=, <=, ==, !=)
echo "<h2> Comparison Operators</h2>";
echo " The value of 1==4 is ";
echo"<br>";
echo var_dump(1==4);
echo"<br>";
echo "The value of 1!=4 is ";
echo"<br>";
echo var_dump(1!=4);
echo "The value of 1>=4 is ";
echo"<br>";
echo var_dump(1>=4);
echo"<br>";
echo "The value of 1<=4 is ";
echo"<br>";
echo var_dump(1<=4);

//5. Logical Operators (AND, OR, NOT, XOR )
// AND= &&
//OR = ||
//NOT = !
echo"<br>";
//echo "<h2> Logival Operators</h2>";

/*
 $myvar = (true and true) = true
  $myvar = (true and false) = false
   $myvar = (true or  true) = true
    $myvar = (true or false) = true
    $myvar = (false or false) = false

echo var_dump($myvar);

Exclusive OR (X-OR) operator
If both input are same then the output is false
If both input are different then the output is true
*/

// if-else statement
 $age = 18;
 if ( $age > 18){
     echo "<br> You are eligible for voting ";
 }
 else if($age ==18){
     echo "<br> You are 18 years old. Congratulations!";
 }

 
 else {
    echo "<br> You are not eligible for voting";

}

echo "<br>";
echo"=======================================";
// Array
echo "<h3> Let's learn an Array!</h3>";

$arr = [0, 2, 4, 6, 8, 10];
 echo" The second position value of array is: ";
 echo $arr[0];
 echo "<br>";
 echo $arr[1];
 echo "<br>";
 echo $arr[2];
 echo "<br>";
 echo $arr[3];










?>




</body>
</html>