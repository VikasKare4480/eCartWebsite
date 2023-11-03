
<?php 

$host ="localhost";
$username = "root";
$password ="";
$dbname = "ecart";

//  connection

$conn = mysqli_connect($host,$username,$password,$dbname);


// cheaking connection

if(!$conn){
   die("connection falied :" .mysqli_connect_error());
}
//  echo "datbase connected";


//acces data

// $no;
// $desq;
// $price;


$no=$desq=$price="";
if(isset($_POST['submit'])){

  $no=$_POST['no'];
  $desq=$_POST['desq'];
  $price=$_POST['price'];



 }
  echo $no;
  echo $desq;
 echo $price;

// insert data to database
$sql = "INSERT INTO cart5(No,Desq,Price)VALUES('$no','$desq','$price')";

(mysqli_query($conn,$sql));

echo "data send sucessfully";
 mysqli_close($conn);

?>
