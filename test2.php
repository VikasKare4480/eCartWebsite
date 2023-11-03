<?php 

$no=$name=$price="";
if(isset($_POST['submit'])){

  $no=$_POST['No'];
  $name=$_POST['Name'];
  $price=$_POST['Price'];


 }

 $total=$price;
 echo $total;
  echo $no;
  echo $name;
 echo $price;

?>