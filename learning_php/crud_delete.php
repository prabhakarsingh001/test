<?php

include "crud_conn.php";

$id=$_GET['id'];


$sql ="DELETE FROM `crudtable` WHERE id = '$id' ";
$query=mysqli_query($conn,$sql);

header('location:crud_display.php');

?>