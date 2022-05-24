<?php
$result=array();

include('product_api_connection.php');

$user_id = $_POST['user_id'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$pincode = $_POST['pincode'];

// print_r($_POST);
// exit();

$sql = "INSERT INTO address(user_id, address, landmark, pincode) VALUES ('$user_id ','$address','$landmark','$pincode')";

$data = mysqli_query($conn, $sql);

if ($data) {
    $result = array("response" => 1, 'msg' => 'Successfully Inserted');
} else {
    $result = array("response" => 0, 'msg' => 'Something went wrong');
}

echo json_encode($result);

?>

















<!-- same code with different methods -->

<!-- extra code not to be deleted -->





















<?php


/*
// $result = array();

include('product_api_connection.php');




$user_id = $_POST['user_id'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$pincode = $_POST['pincode'];


// print_r($_POST);
// exit();

$sql = "INSERT INTO address(user_id, address, landmark, pincode) VALUES ('$user_id ','$address','$landmark','$pincode')";

$result= mysqli_query($conn, $sql);

if ($result) {
    echo "Records added successfully";
} else {
    echo "Error adding records: " . mysqli_error($conn);
}

*/

?>