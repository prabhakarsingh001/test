<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');


// $result=array();

$server="localhost";
$usernmae="root";
$password="";
$database="test";



$conn= mysqli_connect($server,$usernmae,$password,$database);
if($conn){
    echo("success connection");

}else{
    echo("not connected".mysqli_connect_errno($conn));
}


$name=$_POST['name'];

$image=$_FILES['image']['name'];
$tmp_name=$_FILES['image']['tmp_name'];




$sql= "INSERT INTO test(name ,image) VALUES ('$name','$image')";

$result=mysqli_query($conn,$sql);
// need to write for json convrersion
if($result){
    echo("inserted");

}else{
    echo("not");
}

?>