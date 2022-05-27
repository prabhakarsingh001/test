<?php

$server="localhost";
$username="root";
$password="";
$database="newtest";



$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
    echo("connection ok");

}else{
    echo ("not");
}

?>