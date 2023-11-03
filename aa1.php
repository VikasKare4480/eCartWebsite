<?php

include('connection.php');
$host = "localhost";
$username="root";
$pass="";
$dbname="form";


//create connection

$conn=mysqli_connect($host,$username,$pass,$dbname);

$name=$email=$number=$password=$cpassword="";

if(isset($_POST['submit'])){
 
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];


}





//cheaking connection

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
echo "database connectes sucessfully";

// insert data in database

$sql = "INSERT INTO registration2(Name,Email,Mobile,Password,Cpassword)VALUES('$name','$email','$number','$password','$cpassword')";

(mysqli_query($conn,$sql));

mysqli_close($conn);


















// $host='localhost';
// $username="root";
// $pass="";
// $dbname="form";



// $conn= mysqli_connect($host,$username,$pass,$dbname);



// $name=$email=$number="";


// if (isset($_POST['submit'])) {
    
//     $name = $_POST['name'];
//     echo "$name<br>";

//     $email = $_POST['email'];
//     echo "$email<br>";

//     $number= $_POST['number'];
//     echo "$number<br>";
//     echo "data submitted sucessfully";
   
// }







// if(!$conn){
//     die("connection failed" .mysqli_connect_error());
// }

// $sql= "INSERT INTO reg5 (Name,Email,Mobile)VALUES('$name','$email','$number')";

// (mysqli_query($conn,$sql));

// mysqli_close($conn);


?>