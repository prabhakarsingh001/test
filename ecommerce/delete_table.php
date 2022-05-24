<?php

include('product_api_connection.php');

$user_id = $_POST['user_id'];
$attribute_id = $_POST['attribute_id'];


// print_r($_POST);
// exit();

$sql = "DELETE FROM  cart  WHERE user_id = '$user_id' AND attribute_id='$attribute_id' ";

$result= mysqli_query($conn, $sql);

if ($result) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ". mysqli_error($conn);
}































/*  
include('product_api_connection.php');

$user_id = $_POST['user_id'];
$attribute_id = $_POST['attribute_id'];

$sql = "DELETE FROM  cart  WHERE user_id = '$user_id' AND attribute_id='$attribute_id' ";
$result= mysqli_query($conn, $sql);

if ($result) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ". mysqli_error($conn);
}
*/















?>



