<?php 

 $server="localhost";
 $username="root";
 $password="";
 $database="restapi";


$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
	die("connection not successful" . mysqli_connect_error());
}
else{
	echo("connection successful");
}
// $conn=mysqli_connect("localhost","root","", "restapi") or die("connection failed");


?>