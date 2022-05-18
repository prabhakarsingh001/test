<?php

$server="localhost";
$username="root";
$password="";
$database="product";


$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
	die("connection not successful" . mysqli_connect_error());
}
else{
	// echo("connection successful");
}
?>