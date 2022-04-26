<?php 


$server="localhost";
$username="root";
$password="";
$database="apidb";


$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
	die("connection not successful" . mysqli_connect_error());
}
else{
	echo("connection successful");
}


if (isset($_POST['submit'])){
	$emailid=$_POST['emailid'];
	$password=$_POST['password'];


	$sql=" INSERT INTO form ( `emailid`, `password`, `date`) VALUES ( '$emailid', '$password', current_timestamp())";

    $result=mysqli_query($conn,$sql);
    if ($result){
    	echo("data inserted");
    }else{
    	echo("not inserted");
    }





} 



?>