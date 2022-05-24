<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');

$data = array();

include('product_api_connection.php');


$user_id = $_POST['user_id'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$pincode = $_POST['pincode'];


$sql = "UPDATE `address` SET  address ='$address', landmark ='$landmark', pincode ='$pincode'
 WHERE user_id = '$user_id' ";

$result = mysqli_query($conn, $sql);


if ($result) {
    $data = array("response" => 1, 'msg' => 'Successfully Inserted');
} else {
    $data = array("response" => 0, 'msg' => 'Something went wrong');
}

echo json_encode($data);
