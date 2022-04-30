<?php 


$server="localhost";
$username="root";
$password="";
$database="files";

if(isset($_FILES['image'])){
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
	die("connection not successful" . mysqli_connect_error());
}
else{
	echo("connection successful");
}
}
?>


