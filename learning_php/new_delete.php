<?php

include 'new_conn.php';


$id =$_GET['id'];

$sql= "DELETE FROM `test` WHERE id='$id'";
$result=mysqli_query($conn ,$sql);


header('location:new_display.php');



?>
