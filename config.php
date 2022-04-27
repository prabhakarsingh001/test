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



	$emailid= $_POST['emailid'];
	$password =$_POST['password'];
	echo $emailid;
	echo"<br>";
	echo $password;

    $result = $conn -> query("INSERT INTO form ( emailid , password, `date`) VALUES ('$emailid', '$password', current_timestamp())");


    if ($result){
    	echo ("<br> data inserted");
    }else{
    	echo("not inserted" .mysqli_error($conn));
    }








?>