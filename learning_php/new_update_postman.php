<?php 

include 'new_conn.php';

$id=$_POST['id'];
$username =$_POST['username'];
$password =$_POST['password'];

$sql= "UPDATE test SET id='$id',username='$username',password='$password' WHERE id='$id' ";


$result= mysqli_query($conn, $sql);


?>
<!-- successs updating data from postman -->