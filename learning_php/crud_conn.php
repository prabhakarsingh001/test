<?php 

// connecting to database
$server="localhost";
$username="root";
$password="";
$database="cruddb";


$conn=mysqli_connect($server ,$username ,$password, $database) or die("connection failed" . mysqli_connect_error());



if ($conn){
	echo("connection successful");
}else{
	echo("connction failed" );
}


?>